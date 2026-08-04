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

## See Also

+ [Testing Time-Sensitive Code in PHP](https://symfony.com/doc/current/components/clock.html)

Related : [DateTime](DateTime), [DateInterval](DateInterval), [PHP Standards Recommendations (PSR)](PHP Standards Recommendations (PSR)), [Dependency Injection](Dependency Injection), [Test](Test), [Immutable](Immutable), [Interoperability](Interoperability)
