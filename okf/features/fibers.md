---
type: "extension"
title: "Fibers"
description: "Fibers are a low-level mechanism for lightweight concurrency, they allow to pause and resume blocks of code at specific points without blocking the rest of the application."
resource: "https://www.php.net/manual/en/language.fibers.php"
tags: ["extension", "feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Fibers

Fibers are a low-level mechanism for lightweight concurrency, they allow to pause and resume blocks of code at specific points without blocking the rest of the application.

They were introduced in version 8.1 and provide cooperative multitasking, as opposed to preemptive multitasking like threads. This means the application controls exactly where execution yields and resumes.

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

## Documentation
- [https://www.php.net/manual/en/language.fibers.php](https://www.php.net/manual/en/language.fibers.php)

## See Also
- [PHP Fibers: A practical example](https://aoeex.com/phile/php-fibers-a-practical-example/)
- [Async PHP is Here: A Practical Guide to Fibers](https://fsck.sh/en/blog/practical-guide-to-php-fibers/)
- [Fibers in PHP - how to make it easier to implement asynchronicity in your project](https://www.sages.io/blog/fibers-in-PHP-how-ulatwic-implement-asynchronicity-in-project)
- [Unleashing the Power of PHP Fibers: Boost Web Development with Efficient Coroutines](https://phpmagazine.net/2023/03/unleashing-the-power-of-php-fibers-boost-web-development-with-efficient-coroutines.html)
- [PHP Fibers in Production: 4 Real Cases Where They Beat curl_multi and Queues](https://dev.to/gabrielanhaia/php-fibers-in-production-4-real-cases-where-they-beat-curlmulti-and-queues-39j8)
- [PHP Fibers: simplifying async code and speeding up development](https://medium.com/manychat-engineering/php-fibers-simplifying-async-code-and-speeding-up-development-519d40ace2d9)

## Related
- [Async](/features/async.md)
- [Asynchronous](/features/asynchronous.md)
- [Blocking Wait](/features/blocking-wait.md)
- [Cancellation](/features/cancellation.md)
- [Future](/features/future.md)
- [Promise](/features/promise.md)
- [Actor Model](/features/actor-model.md)
- [Channel](/features/channel.md)
- [Continuation](/features/continuation.md)
- [Fire-and-forget](/features/fire-and-forget.md)
- [Green Thread](/features/green-thread.md)
- [AMP (Asynchronous Markup Protocol)](/features/amp.md)
- [OpenSwoole](/features/openswoole.md)
- [ReactPHP](/features/reactphp.md)
- [Swoole](/features/swoole.md)

## Details
- PHP since: 8.1+
- Packagist: [amphp/process](https://packagist.org/packages/amphp/process)

