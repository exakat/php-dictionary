# Green Thread
Green threads, also called goroutines in Go, virtual threads in Java 21+, or lightweight threads in Erlang/Haskell, are user-space threads managed entirely by the language runtime rather than the operating system kernel. The runtime multiplexes thousands or millions of them onto a small pool of OS threads, handles scheduling, stack growth, and context switching transparently, and makes blocking calls non-blocking without programmer intervention.

Key properties of native green threads:

+ Created with negligible overhead: a few kilobytes of stack, no syscall
+ Scheduled by the runtime, not the OS; the programmer spawns them freely without thinking about thread-pool sizing.
+ Blocking I/O is intercepted by the runtime and turned into a yield; other green threads run in the meantime.
+ No explicit ``await`` or ``suspend`` call is required at the call site: existing blocking code simply works.

Go goroutines are the canonical example: ``go fn()`` spawns a goroutine and returns immediately. The Go scheduler parks it when it blocks on I/O and resumes it when the I/O completes, across a fixed number of OS threads ``GOMAXPROCS``.

PHP does not have native green threads. PHP's default execution model is shared-nothing: each request runs in its own process or OS thread, managed by PHP-FPM or the web server, with no in-process concurrency between requests.

Available approximations, each with trade-offs:

+ Fibers, PHP 8.1: cooperative micro-threads within a single OS thread. Require explicit ``Fiber::suspend()`` / ``resume()`` call sites; the programmer must opt in at every yield point. Fibers do not run in parallel and do not intercept blocking I/O automatically.
+ Swoole / OpenSwoole / Swow: C extensions that replace PHP's I/O layer and provide a coroutine scheduler. Within a Swoole coroutine server, blocking calls are transparently converted to non-blocking ones, closely approximating green-thread behaviour. However, this requires a persistent-process server model and is not part of the PHP standard distribution.
+ ReactPHP / AMPHP: pure-PHP event loops built on ``stream_select`` or ``libuv``. They require explicit async/await, ``yield`` or ``async``/``await`` via Fibers, at every I/O boundary; there is no transparent interception.
+ ``parallel`` extension: true OS threads for CPU-bound work, with strict shared-state constraints: no shared objects.

None of these match the ergonomics of goroutines, where spawning a concurrent task is a single keyword and all existing synchronous I/O code continues to work unchanged.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/green-thread.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/green-thread.html","name":"Green Thread","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:18:59 +0000","dateModified":"Mon, 13 Jul 2026 09:18:59 +0000","description":"Green threads, also called goroutines in Go, virtual threads in Java 21+, or lightweight threads in Erlang\/Haskell, are user-space threads managed entirely by the language runtime rather than the operating system kernel","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Green Thread.html"]}],"alternateName":["goroutine","goroutines","green-threads"],"keywords":["unsupported","concurrency","architecture"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fibers.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coroutine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concurrency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/asynchronous.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/async.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multithreading.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/thread.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/green.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/openswoole.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sem.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/swoole.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.fibers.php"},{"@type":"CreativeWork","name":"Go: Goroutines","url":"https:\/\/go.dev\/tour\/concurrency\/1"},{"@type":"CreativeWork","name":"Java 21 Virtual Threads","url":"https:\/\/openjdk.org\/jeps\/444"},{"@type":"CreativeWork","name":"Swoole coroutines","url":"https:\/\/wiki.swoole.com\/en\/#\/coroutine"},{"@type":"CreativeWork","name":"PHP Fibers RFC","url":"https:\/\/wiki.php.net\/rfc\/fibers"},{"@type":"CreativeWork","name":"AMPHP","url":"https:\/\/amphp.org\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"green-thread"}]}]}</script>
```php
<?php

    // PHP 8.1 Fibers: closest native approximation.
    // Unlike goroutines, suspension must be explicit and there is no parallelism.
    
    $fiber = new Fiber(function (): void {
        echo "Fiber started\n";
        $received = Fiber::suspend('first yield');  // explicit yield point required
        echo "Fiber resumed with: $received\n";
    });
    
    $yielded = $fiber->start();           // run until first suspend()
    echo "Main got: $yielded\n";         // 'first yield'
    $fiber->resume('hello');              // hand control back
    
    // Swoole coroutines (extension, not standard PHP) come closer
    // to transparent green threads:
    //
    // Co\run(function () {
    //     go(function () {
    //         // Co::sleep() suspends this coroutine transparently;
    //         // other coroutines run during the wait.
    //         Co::sleep(1);
    //         echo "task A done\n";
    //     });
    //     go(function () {
    //         Co::sleep(1);
    //         echo "task B done\n";
    //     });
    // });

?>
```

**[Documentation](https://www.php.net/manual/en/language.fibers.php)**
## See Also

+ [Go: Goroutines](https://go.dev/tour/concurrency/1)
+ [Java 21 Virtual Threads](https://openjdk.org/jeps/444)
+ [Swoole coroutines](https://wiki.swoole.com/en/#/coroutine)
+ [PHP Fibers RFC](https://wiki.php.net/rfc/fibers)
+ [AMPHP](https://amphp.org/)

## Related

+ [Fibers](fibers.html)
+ [Coroutine](coroutine.html)
+ [Concurrency](concurrency.html)
+ [Asynchronous](asynchronous.html)
+ [Async](async.html)
+ [Multithreading](multithreading.html)
+ [Thread](thread.html)
+ [Green](green.html)
+ [OpenSwoole](openswoole.html)
+ [Semaphore](sem.html)
+ [Swoole](swoole.html)

## Related packages

+ [amphp/amp](https://packagist.org/packages/amphp/amp)
+ [react/event-loop](https://packagist.org/packages/react/event-loop)
