---
type: "PHP Feature"
title: "Clock"
description: "A clock abstraction encapsulates the current time behind an interface, making code that depends on the current time testable with a controlled, deterministic value instead of the real system clock."
resource: "https://www.php-fig.org/psr/psr-20/"
tags: ["standard", "psr"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Clock

A clock abstraction encapsulates the current time behind an interface, making code that depends on the current time testable with a controlled, deterministic value instead of the real system clock.

PSR-20 standardizes this with ClockInterface, which exposes a single method: ``function now(): DateTimeImmutable``. Rather than calling new ``DateTimeImmutable()`` or ``time()`` directly, a ``ClockInterface`` is injected as a dependency, giving tests full control over the perceived time.

PHP 8.3 introduced the native ``DateTimeImmutable::createFromTimestamp()`` method for testing purposes.

```php
<?php

    use Psr\Clock\ClockInterface;
    
    final class Scheduler {
        public function __construct(private readonly ClockInterface $clock) {}
    
        public function isExpired(DateTimeImmutable $expiresAt): bool {
            return $this->clock->now() > $expiresAt;
        }
    }

?>
```

## Documentation
- [https://www.php-fig.org/psr/psr-20/](https://www.php-fig.org/psr/psr-20/)

## See Also
- [Testing Time-Sensitive Code in PHP](https://symfony.com/doc/current/components/clock.html)

## Related
- [DateTime](/features/datetime.md)
- [DateInterval](/features/dateinterval.md)
- [PHP Standards Recommendations (PSR)](/features/psr.md)
- [Dependency Injection](/features/dependency-injection.md)
- [Test](/features/test.md)
- [Immutable](/features/immutable.md)
- [Interoperability](/features/interoperability.md)

## Details
- Packagist: [psr/clock](https://packagist.org/packages/psr/clock)
- Packagist: [symfony/clock](https://packagist.org/packages/symfony/clock)

