---
type: "PHP Feature"
title: "Concurrency"
description: "Concurrency, sometimes misspelled ``concurency``, is a concept in computing where multiple tasks are in progress at the same time."
resource: "https://en.wikipedia.org/wiki/Concurrency_(computer_science)"
tags: ["parallelism"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Concurrency

Concurrency, sometimes misspelled ``concurency``, is a concept in computing where multiple tasks are in progress at the same time.

PHP uses several ways to handle concurrency:

+ Externally, by the webserver or PHP-fpm
+ Internally, with forked processes, with pcntl
+ Internally, with threads, with parallel
+ Cooperating, with fibers
+ Non-blocking IO, with swoole or amphp.

## Documentation
- [https://en.wikipedia.org/wiki/Concurrency_(computer_science)](https://en.wikipedia.org/wiki/Concurrency_(computer_science))

## See Also
- [FrankenPHP](https://frankenphp.dev/)
- [swoole](https://wiki.swoole.com/en/#/)
- [OpenSwoole project](https://openswoole.com/)
- [AMPHP](https://amphp.org/)
- [Understanding Concurrency in PHP](https://www.honeybadger.io/blog/php-concurrency/)
- [Understanding Fibers in PHP: A New Way to Handle Concurrency](https://itsimiro.medium.com/understanding-fibers-in-php-a-new-way-to-handle-concurrency-ed07424320ff)
- [PHP is 5x Faster Than NestJS? Rethinking High-Load with Swoole](https://dev.to/roman_shneer_9301c1e5f2fd/headline-php-is-5x-faster-than-nestjs-rethinking-high-load-with-swoole-31di)

## Related
- [Thread](/features/thread.md)
- [Process](/features/process.md)
- [Asynchronous](/features/asynchronous.md)
- [FastCGI Process Manager (FPM)](/features/fpm.md)
- [Atomic Operation](/features/atomic-operation.md)
- [file_put_contents()](/features/file_put_contents.md)
- [Mutex](/features/mutex.md)
- [Race Condition](/features/race-condition.md)
- [Actor Model](/features/actor-model.md)
- [Cache Stampede](/features/cache-stampede.md)
- [Green Thread](/features/green-thread.md)
- [Software Transactional Memory (STM)](/features/software-transactional-memory.md)
- [AMP (Asynchronous Markup Protocol)](/features/amp.md)
- [ReactPHP](/features/reactphp.md)
- [Semaphore](/features/sem.md)
- [Shared Memory](/features/shared-memory.md)
- [Shared](/features/shared.md)

## Details
- Extension: ext-fibers
- Extension: ext-parallel
- Extension: ext-pcntl

