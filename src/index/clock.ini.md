# Clock
A clock abstraction encapsulates the current time behind an interface, making code that depends on the current time testable with a controlled, deterministic value instead of the real system clock.

PSR-20 standardizes this with ClockInterface, which exposes a single method: ``function now(): DateTimeImmutable``. Rather than calling new ``DateTimeImmutable()`` or ``time()`` directly, a ``ClockInterface`` is injected as a dependency, giving tests full control over the perceived time.

PHP 8.3 introduced the native ``DateTimeImmutable::createFromTimestamp()`` method for testing purposes.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/clock.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/clock.ini.html","name":"Clock","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 14:04:45 +0000","dateModified":"Wed, 15 Jul 2026 14:04:45 +0000","description":"A clock abstraction encapsulates the current time behind an interface, making code that depends on the current time testable with a controlled, deterministic value instead of the real system clock","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Clock.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php-fig.org/psr/psr-20/)**
## See Also

+ [Testing Time-Sensitive Code in PHP](https://symfony.com/doc/current/components/clock.html)

## Related

+ [DateTime](datetime.ini.html)
+ [DateInterval](dateinterval.ini.html)
+ [PHP Standards Recommendations (PSR)](psr.ini.html)
+ [Dependency Injection](dependency-injection.ini.html)
+ [Test](test.ini.html)
+ [Immutable](immutable.ini.html)
+ [Interoperability](interoperability.ini.html)

## Related packages

+ [psr/clock](https://packagist.org/packages/psr/clock)
+ [symfony/clock](https://packagist.org/packages/symfony/clock)
