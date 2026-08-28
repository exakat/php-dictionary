# Mutable State
Mutable state refers to data that can be changed after it is created.

Most objects and arrays are mutable by default. Mutable state can lead to bugs in concurrent environments and makes code harder to reason about.

PHP offers several mechanisms to create immutable state:

+ ``readonly`` properties, since PHP 8.1+
+ Immutable classes, like ``DateTimeImmutable``
+ Final classes to prevent modification via inheritance.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mutable-state.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mutable-state.html","name":"Mutable State","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 08:24:09 +0000","dateModified":"Sat, 15 Aug 2026 08:24:09 +0000","description":"Mutable state refers to data that can be changed after it is created","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mutable-state.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/state.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/immutable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readonly.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/side-effect.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Immutable_object"},{"@type":"CreativeWork","name":"PHP Readonly Properties","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.properties.php#language.oop5.properties.readonly-properties"},{"@type":"CreativeWork","name":"DateTimeImmutable","url":"https:\/\/www.php.net\/manual\/en\/class.datetimeimmutable.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"mutable-state"}]}]}</script>
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
## See Also

+ [PHP Readonly Properties](https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties)
+ [DateTimeImmutable](https://www.php.net/manual/en/class.datetimeimmutable.php)

## Related

+ [State](state.html)
+ [Immutable](immutable.html)
+ [Readonly](readonly.html)
+ [Properties](property.html)
+ [Side Effect](side-effect.html)
