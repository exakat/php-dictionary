# Snapshot
A snapshot captures the complete state of an object or aggregate at a specific point in time. It is commonly used as an optimization in event-sourced systems: instead of replaying the full event history to rebuild an aggregate, the system loads the latest snapshot and only replays events that occurred after it.

In testing, snapshot testing serializes the output of a component on the first run and stores it as a reference. Subsequent runs compare against this stored value, automatically detecting unintended changes to rendered output or computed results.

The Memento design pattern is the classical OOP formalization of the snapshot concept.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/snapshot.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/snapshot.html","name":"Snapshot","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:23:53 +0000","dateModified":"Fri, 19 Jun 2026 21:23:53 +0000","description":"A snapshot captures the complete state of an object or aggregate at a specific point in time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/snapshot.html"]}],"keywords":["design pattern"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-sourcing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/immutable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serialization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/design-pattern.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-persistence.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ddd.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Memento_pattern"},{"@type":"CreativeWork","name":"Spatie Snapshot Testing","url":"https:\/\/github.com\/spatie\/pest-plugin-snapshots"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"snapshot"}]}]}</script>
```php
<?php

final class OrderSnapshot {
    public function __construct(
        public readonly string            $orderId,
        public readonly OrderStatus       $status,
        public readonly DateTimeImmutable $at,
        public readonly int               $lastEventSequence,
    ) {}
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Memento_pattern)**
## See Also

+ [Spatie Snapshot Testing](https://github.com/spatie/pest-plugin-snapshots)

## Related

+ [Event Sourcing](event-sourcing.html)
+ [Immutable](immutable.html)
+ [Serialization](serialization.html)
+ [Test](test.html)
+ [Design Pattern](design-pattern.html)
+ [Object Persistence](object-persistence.html)
+ [Domain Design Driven (DDD)](ddd.html)

## Related packages

+ [spatie/pest-plugin-snapshots](https://packagist.org/packages/spatie/pest-plugin-snapshots)
