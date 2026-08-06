# Snapshot
A snapshot captures the complete state of an object or aggregate at a specific point in time. It is commonly used as an optimization in event-sourced systems: instead of replaying the full event history to rebuild an aggregate, the system loads the latest snapshot and only replays events that occurred after it.

In testing, snapshot testing serializes the output of a component on the first run and stores it as a reference. Subsequent runs compare against this stored value, automatically detecting unintended changes to rendered output or computed results.

The Memento design pattern is the classical OOP formalization of the snapshot concept.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/snapshot.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/snapshot.html","name":"Snapshot","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:23:53 +0000","dateModified":"Fri, 19 Jun 2026 21:23:53 +0000","description":"A snapshot captures the complete state of an object or aggregate at a specific point in time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Snapshot.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Event Sourcing](event-sourcing.ini.html)
+ [Immutable](immutable.ini.html)
+ [Serialization](serialization.ini.html)
+ [Test](test.ini.html)
+ [Design Pattern](design-pattern.ini.html)
+ [Object Persistence](object-persistence.ini.html)
+ [Domain Design Driven (DDD)](ddd.ini.html)

## Related packages

+ [spatie/pest-plugin-snapshots](https://packagist.org/packages/spatie/pest-plugin-snapshots)
