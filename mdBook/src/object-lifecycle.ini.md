# Object Lifecycle
The lifecycle of an object is the sequence of stages an instance goes through, from its creation to its destruction.

An object is born when ``new`` is called: PHP allocates it, then runs its ``__construct()`` method with the supplied arguments. While it lives, the object may be duplicated with ``clone``, which triggers ``__clone()`` if it is defined, or turned into a string, an array, or plain data through magic methods such as ``__toString()``, ``__serialize()`` and ``__unserialize()``, or the older ``__sleep()`` and ``__wakeup()``.

An object dies when its last reference disappears, whether by ``unset()``, by going out of scope, or by being overwritten. PHP's reference counting then reclaims it immediately, calling ``__destruct()`` if it is defined. Objects caught in a reference cycle are not freed right away: they wait for the garbage collector to run.

Unlike languages with an explicit destroy step, PHP objects have no forced end of life during normal execution: the engine handles it automatically, though the final destructions of any surviving objects are guaranteed to happen at shutdown, at the latest.
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

## See Also

+ [PHP Constructors and Destructors: Practical Patterns for Predictable Object Lifecycles](https://thelinuxcode.com/php-constructors-and-destructors-practical-patterns-for-predictable-object-lifecycles/)
+ [PHP Constructor & Destructor](https://redohub.com/php/php-constructor-destructor)

Related : [Constructor](Constructor), [Destructor](Destructor), [__clone() Method](__clone() Method), [__sleep() Method](__sleep() Method), [__wakeup() Method](__wakeup() Method), [__serialize() Method](__serialize() Method), [__unserialize() Method](__unserialize() Method), [Reference Count](Reference Count), [Garbage Collection](Garbage Collection), [Lifecycle](Lifecycle), [Shutdown](Shutdown), [Object](Object), [instance](instance)
