---
type: "concept"
title: "Object Lifecycle"
description: "The lifecycle of an object is the sequence of stages an instance goes through, from its creation to its destruction."
resource: "https://www.php.net/manual/en/language.oop5.decon.php"
tags: ["concept", "oop"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Object Lifecycle

The lifecycle of an object is the sequence of stages an instance goes through, from its creation to its destruction.

An object is born when ``new`` is called: PHP allocates it, then runs its ``__construct()`` method with the supplied arguments. While it lives, the object may be duplicated with ``clone``, which triggers ``__clone()`` if it is defined, or turned into a string, an array, or plain data through magic methods such as ``__toString()``, ``__serialize()`` and ``__unserialize()``, or the older ``__sleep()`` and ``__wakeup()``.

An object dies when its last reference disappears, whether by ``unset()``, by going out of scope, or by being overwritten. PHP's reference counting then reclaims it immediately, calling ``__destruct()`` if it is defined. Objects caught in a reference cycle are not freed right away: they wait for the garbage collector to run.

Unlike languages with an explicit destroy step, PHP objects have no forced end of life during normal execution: the engine handles it automatically, though the final destruction of any surviving objects is guaranteed to happen at shutdown, at the latest.

```php
<?php

    class Handle {
        private $resource;

        function __construct(string $path) {
            $this->resource = fopen($path, 'r');
        }

        function __clone() {
            // duplicate the underlying resource instead of sharing it
            $this->resource = fopen(stream_get_meta_data($this->resource)['uri'], 'r');
        }

        function __destruct() {
            fclose($this->resource);
        }
    }

    $a = new Handle('/tmp/data.txt');
    $b = clone $a;

    unset($a); // __destruct() runs for $a's resource
    unset($b); // __destruct() runs for $b's resource

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.decon.php](https://www.php.net/manual/en/language.oop5.decon.php)

## See Also
- [PHP Constructors and Destructors: Practical Patterns for Predictable Object Lifecycles](https://thelinuxcode.com/php-constructors-and-destructors-practical-patterns-for-predictable-object-lifecycles/)
- [PHP Constructor & Destructor](https://redohub.com/php/php-constructor-destructor)

## Related
- [Constructor](/features/constructor.md)
- [Destructor](/features/destructor.md)
- [__clone() Method](/features/__clone.md)
- [__sleep() Method](/features/__sleep.md)
- [__wakeup() Method](/features/__wakeup.md)
- [__serialize() Method](/features/__serialize.md)
- [__unserialize() Method](/features/__unserialize.md)
- [Reference Count](/features/reference-count.md)
- [Garbage Collection](/features/garbage-collection.md)
- [Lifecycle](/features/lifecycle.md)
- [Shutdown](/features/shutdown.md)
- [Object](/features/object.md)
- [instance](/features/instance.md)

