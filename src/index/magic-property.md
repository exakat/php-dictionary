# Magic Property
Special properties, which are not declared, but dynamically handled by the magic methods. They do not have specific declaration. 

The magic methods to handle magic properties are: ``__get()``, ``__set()``, ``__isset()`` and ``__unset()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-property.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-property.html","name":"Magic Property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Special properties, which are not declared, but dynamically handled by the magic methods","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Magic Property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Magic Property"}]}]}</script>
```php
<?php

class X {
    function __get($name) {
        return 'World!';
    }
}

$x = new X;
echo $x->hello; // display World!

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php)**
## Related

+ [\_\_get() Method](__get.html)
+ [\_\_set() Method](__set.html)
+ [\_\_isset() Method](__isset.html)
+ [\_\_unset() Method](__unset.html)
+ [Magic Constants](magic-constant.html)
+ [Magic](magic.html)
+ [Properties](property.html)
