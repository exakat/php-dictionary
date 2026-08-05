# Concurrency
Concurrency is a concept in computing where multiple tasks are in progress at the same time.

PHP uses several ways to handle concurrency:

+ Externally, by the webserver or PHP-fpm
+ Internally, with forked processes, with pcntl
+ Internally, with threads, with parallel
+ Cooperating, with fibers
+ Non-blocking IO, with swoole or amphp.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/concurrency.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/concurrency.ini.html","name":"Concurrency","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:22:43 +0000","dateModified":"Tue, 14 Jul 2026 06:22:43 +0000","description":"Concurrency is a concept in computing where multiple tasks are in progress at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Concurrency.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Concurrency_(computer_science))**
## See Also

+ [FrankenPHP](https://frankenphp.dev/)
+ [swoole](https://wiki.swoole.com/en/#/)
+ [OpenSwoole project](https://openswoole.com/)
+ [AMPHP](https://amphp.org/)
+ [Understanding Concurrency in PHP](https://www.honeybadger.io/blog/php-concurrency/)
+ [Understanding Fibers in PHP: A New Way to Handle Concurrency](https://itsimiro.medium.com/understanding-fibers-in-php-a-new-way-to-handle-concurrency-ed07424320ff)
+ [PHP is 5x Faster Than NestJS? Rethinking High-Load with Swoole](https://dev.to/roman_shneer_9301c1e5f2fd/headline-php-is-5x-faster-than-nestjs-rethinking-high-load-with-swoole-31di)

## Related

+ [Thread](thread.ini.html)
+ [Process](process.ini.html)
+ [Asynchronous](asynchronous.ini.html)
+ [FastCGI Process Manager (FPM)](fpm.ini.html)
+ [Atomic Operation](atomic-operation.ini.html)
+ [file\_put\_contents()](file_put_contents.ini.html)
+ [Mutex](mutex.ini.html)
+ [Race Condition](race-condition.ini.html)
+ [Actor Model](actor-model.ini.html)
+ [Cache Stampede](cache-stampede.ini.html)
+ [Green Thread](green-thread.ini.html)
+ [Software Transactional Memory (STM)](software-transactional-memory.ini.html)
+ [AMP (Asynchronous Markup Protocol)](amp.ini.html)
+ [ReactPHP](reactphp.ini.html)
+ [Semaphore](sem.ini.html)
+ [Shared Memory](shared-memory.ini.html)
+ [Shared](shared.ini.html)
