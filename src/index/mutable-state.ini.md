# Mutable State
Mutable state refers to data that can be changed after it is created.

Most objects and arrays are mutable by default. Mutable state can lead to bugs in concurrent environments and makes code harder to reason about.

PHP offers several mechanisms to create immutable state:

+ ``readonly`` properties, since PHP 8.1+
+ Immutable classes, like ``DateTimeImmutable``
+ Final classes to prevent modification via inheritance.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/mutable-state.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/mutable-state.ini.html","name":"Mutable State","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:12:59 +0000","dateModified":"Thu, 16 Jul 2026 08:12:59 +0000","description":"Mutable state refers to data that can be changed after it is created","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Mutable State.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Mutable state
    class User {
        public string $name;
    }
    
    $user = new User();
    $user->name = 'Alice';
    $user->name = 'Bob'; // Mutable

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Immutable_object)**
## Related

+ [State](state.ini.html)
+ [Immutable](immutable.ini.html)
+ [Readonly](readonly.ini.html)
+ [Properties](property.ini.html)
+ [Side Effect](side-effect.ini.html)
