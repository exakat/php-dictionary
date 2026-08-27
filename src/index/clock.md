# Clock
A clock abstraction encapsulates the current time behind an interface, making code that depends on the current time testable with a controlled, deterministic value instead of the real system clock.

PSR-20 standardizes this with ClockInterface, which exposes a single method: ``function now(): DateTimeImmutable``. Rather than calling new ``DateTimeImmutable()`` or ``time()`` directly, a ``ClockInterface`` is injected as a dependency, giving tests full control over the perceived time.

PHP 8.3 introduced the native ``DateTimeImmutable::createFromTimestamp()`` method for testing purposes.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/clock.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/clock.html","name":"Clock","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 14:04:45 +0000","dateModified":"Wed, 15 Jul 2026 14:04:45 +0000","description":"A clock abstraction encapsulates the current time behind an interface, making code that depends on the current time testable with a controlled, deterministic value instead of the real system clock","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/clock.html"]}],"alternateName":["psr-20"],"keywords":["standard","psr"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetime.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dateinterval.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/psr.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependency-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/immutable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interoperability.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php-fig.org\/psr\/psr-20\/"},{"@type":"CreativeWork","name":"Testing Time-Sensitive Code in PHP","url":"https:\/\/symfony.com\/doc\/current\/components\/clock.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"clock"}]}]}</script>
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

+ [DateTime](datetime.html)
+ [DateInterval](dateinterval.html)
+ [PHP Standards Recommendations (PSR)](psr.html)
+ [Dependency Injection](dependency-injection.html)
+ [Test](test.html)
+ [Immutable](immutable.html)
+ [Interoperability](interoperability.html)

## Related packages

+ [psr/clock](https://packagist.org/packages/psr/clock)
+ [symfony/clock](https://packagist.org/packages/symfony/clock)
