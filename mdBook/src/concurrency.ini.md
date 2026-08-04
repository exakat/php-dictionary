# Concurrency
Concurrency is a concept in computing where multiple tasks are in progress at the same time.

PHP uses several ways to handle concurrency:

+ Externally, by the webserver or PHP-fpm
+ Internally, with forked processes, with pcntl
+ Internally, with threads, with parallel
+ Cooperating, with fibers
+ Non-blocking IO, with swoole or amphp.
## See Also

+ [FrankenPHP](https://frankenphp.dev/)
+ [swoole](https://wiki.swoole.com/en/#/)
+ [OpenSwoole project](https://openswoole.com/)
+ [AMPHP](https://amphp.org/)
+ [Understanding Concurrency in PHP](https://www.honeybadger.io/blog/php-concurrency/)
+ [Understanding Fibers in PHP: A New Way to Handle Concurrency](https://itsimiro.medium.com/understanding-fibers-in-php-a-new-way-to-handle-concurrency-ed07424320ff)
+ [PHP is 5x Faster Than NestJS? Rethinking High-Load with Swoole](https://dev.to/roman_shneer_9301c1e5f2fd/headline-php-is-5x-faster-than-nestjs-rethinking-high-load-with-swoole-31di)

Related : [Thread](Thread), [Process](Process), [Asynchronous](Asynchronous), [FastCGI Process Manager (FPM)](FastCGI Process Manager (FPM)), [Atomic Operation](Atomic Operation), [file_put_contents()](file_put_contents()), [Mutex](Mutex), [Race Condition](Race Condition), [Actor Model](Actor Model), [Cache Stampede](Cache Stampede), [Green Thread](Green Thread), [Software Transactional Memory (STM)](Software Transactional Memory (STM)), [AMP (Asynchronous Markup Protocol)](AMP (Asynchronous Markup Protocol)), [ReactPHP](ReactPHP), [Semaphore](Semaphore), [Shared Memory](Shared Memory), [Shared](Shared)
