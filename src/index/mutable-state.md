# Mutable State
Mutable state refers to data that can be changed after it is created.

Most objects and arrays are mutable by default. Mutable state can lead to bugs in concurrent environments and makes code harder to reason about.

PHP offers several mechanisms to create immutable state:

+ ``readonly`` properties, since PHP 8.1+
+ Immutable classes, like ``DateTimeImmutable``
+ Final classes to prevent modification via inheritance.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mutable-state.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mutable-state.html","name":"Mutable State","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:12:59 +0000","dateModified":"Thu, 16 Jul 2026 08:12:59 +0000","description":"Mutable state refers to data that can be changed after it is created","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Mutable State.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Mutable State"}]}]}</script>
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

+ [State](state.html)
+ [Immutable](immutable.html)
+ [Readonly](readonly.html)
+ [Properties](property.html)
+ [Side Effect](side-effect.html)
