# Special Constant
The only special constant is the ``::class`` constant. It has the same syntax as a class constant, hence the name. Yet, it is always defined, and holds the fully qualified name of the related class, interface, trait or enumeration.

It is convenient for class name resolution, in particular with namespaced classes.

The resulting name does not include the initial ``\``.

``::class`` is similar to the ``get_class()`` function, although it is compatible with ``static``, ``self`` or ``parent``.

The notion of special constant is distinct from the magic constants, such as ``__FILE__``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/special-constant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/special-constant.html","name":"Special Constant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The only special constant is the ::class constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Special Constant.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"special-constant"}]}]}</script>
```php
<?php

use A\B\C as D;

echo A::class;  // A 

echo D::class;  // A\B\C 

class x {
    function foo() {
        echo static::class;  // x
    }
}

echo $object::class; // similar to get_class($object)

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.constants.php)**
## Related

+ [Fully Qualified Name](fqn.html)
+ [Static Constant](class-constant.html)
+ [Magic Constants](magic-constant.html)
+ [\_\_FILE\_\_](__file__.html)
