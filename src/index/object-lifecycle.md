# Object Lifecycle
The lifecycle of an object is the sequence of stages an instance goes through, from its creation to its destruction.

An object is born when ``new`` is called: PHP allocates it, then runs its ``__construct()`` method with the supplied arguments. While it lives, the object may be duplicated with ``clone``, which triggers ``__clone()`` if it is defined, or turned into a string, an array, or plain data through magic methods such as ``__toString()``, ``__serialize()`` and ``__unserialize()``, or the older ``__sleep()`` and ``__wakeup()``.

An object dies when its last reference disappears, whether by ``unset()``, by going out of scope, or by being overwritten. PHP's reference counting then reclaims it immediately, calling ``__destruct()`` if it is defined. Objects caught in a reference cycle are not freed right away: they wait for the garbage collector to run.

Unlike languages with an explicit destroy step, PHP objects have no forced end of life during normal execution: the engine handles it automatically, though the final destruction of any surviving objects is guaranteed to happen at shutdown, at the latest.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-lifecycle.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-lifecycle.html","name":"Object Lifecycle","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:34:22 +0000","dateModified":"Sat, 08 Aug 2026 14:34:22 +0000","description":"The lifecycle of an object is the sequence of stages an instance goes through, from its creation to its destruction","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-lifecycle.html"]}],"keywords":["concept","oop"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constructor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/destructor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__clone.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__sleep.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__wakeup.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__serialize.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__unserialize.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference-count.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/garbage-collection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lifecycle.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shutdown.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instance.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.decon.php"},{"@type":"CreativeWork","name":"PHP Constructors and Destructors: Practical Patterns for Predictable Object Lifecycles","url":"https:\/\/thelinuxcode.com\/php-constructors-and-destructors-practical-patterns-for-predictable-object-lifecycles\/"},{"@type":"CreativeWork","name":"PHP Constructor & Destructor","url":"https:\/\/redohub.com\/php\/php-constructor-destructor"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"object-lifecycle"}]}]}</script>
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

**[Documentation](https://www.php.net/manual/en/language.oop5.decon.php)**
## See Also

+ [PHP Constructors and Destructors: Practical Patterns for Predictable Object Lifecycles](https://thelinuxcode.com/php-constructors-and-destructors-practical-patterns-for-predictable-object-lifecycles/)
+ [PHP Constructor & Destructor](https://redohub.com/php/php-constructor-destructor)

## Related

+ [Constructor](constructor.html)
+ [Destructor](destructor.html)
+ [\_\_clone() Method](__clone.html)
+ [\_\_sleep() Method](__sleep.html)
+ [\_\_wakeup() Method](__wakeup.html)
+ [\_\_serialize() Method](__serialize.html)
+ [\_\_unserialize() Method](__unserialize.html)
+ [Reference Count](reference-count.html)
+ [Garbage Collection](garbage-collection.html)
+ [Lifecycle](lifecycle.html)
+ [Shutdown](shutdown.html)
+ [Object](object.html)
+ [instance](instance.html)
