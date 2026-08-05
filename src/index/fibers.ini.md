# Fibers
Fibers are a low-level mechanism for lightweight concurrency, they allow to pause and resume blocks of code at specific points without blocking the rest of the application.

They were introduced in version 8.1 and provide cooperative multitasking, as opposed to preemptive multitasking like threads. This means the application controls exactly where execution yields and resumes.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fibers.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fibers.ini.html","name":"Fibers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:22:58 +0000","dateModified":"Tue, 14 Jul 2026 06:22:58 +0000","description":"Fibers are a low-level mechanism for lightweight concurrency, they allow to pause and resume blocks of code at specific points without blocking the rest of the application","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Fibers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $fiber = new Fiber(function (): void {
       $value = Fiber::suspend('fiber');
       echo "Value used to resume fiber:", $value, PHP_EOL;
    });
    
    $value = $fiber->start();
    
    echo "Value from fiber suspending:", $value, PHP_EOL;
    
    $fiber->resume('test');

?>
```

**[Documentation](https://www.php.net/manual/en/language.fibers.php)**
## See Also

+ [PHP Fibers: A practical example](https://aoeex.com/phile/php-fibers-a-practical-example/)
+ [Async PHP is Here: A Practical Guide to Fibers](https://fsck.sh/en/blog/practical-guide-to-php-fibers/)
+ [Fibers in PHP - how to make it easier to implement asynchronicity in your project](https://www.sages.io/blog/fibers-in-PHP-how-ulatwic-implement-asynchronicity-in-project)
+ [Unleashing the Power of PHP Fibers: Boost Web Development with Efficient Coroutines](https://phpmagazine.net/2023/03/unleashing-the-power-of-php-fibers-boost-web-development-with-efficient-coroutines.html)
+ [PHP Fibers in Production: 4 Real Cases Where They Beat curl_multi and Queues](https://dev.to/gabrielanhaia/php-fibers-in-production-4-real-cases-where-they-beat-curlmulti-and-queues-39j8)
+ [PHP Fibers: simplifying async code and speeding up development](https://medium.com/manychat-engineering/php-fibers-simplifying-async-code-and-speeding-up-development-519d40ace2d9)

## Related

+ [Async](async.ini.html)
+ [Asynchronous](asynchronous.ini.html)
+ [Multithreading](multithread.ini.html)
+ [Blocking Wait](blocking-wait.ini.html)
+ [Cancellation](cancellation.ini.html)
+ [Future](future.ini.html)
+ [Promise](promise.ini.html)
+ [Actor Model](actor-model.ini.html)
+ [Channel](channel.ini.html)
+ [Continuation](continuation.ini.html)
+ [Fire-and-forget](fire-and-forget.ini.html)
+ [Green Thread](green-thread.ini.html)
+ [AMP (Asynchronous Markup Protocol)](amp.ini.html)
+ [OpenSwoole](openswoole.ini.html)
+ [ReactPHP](reactphp.ini.html)
+ [Swoole](swoole.ini.html)

## Related packages

+ [amphp/process](https://packagist.org/packages/amphp/process)
