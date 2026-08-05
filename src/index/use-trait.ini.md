# Use In Traits
``use`` is a keyword for traits and classes: it imports another trait in the current structure. 

The import federates all the defined structures in both traits and classes: the methods, the properties and the constants. 

There may be naming conflicts between the imported traits and the host structure: the conflicts may be between an import and the host structure, or between two distinct imported traits.

In that case, there is a mechanism to resolve the conflicts: the ``insteadof`` keyword allows the host to choose between several competing implementation. 

The ``as`` keyword is also available to create aliases from the import structures. These aliases shall not introduce new naming conflicts. It is not possible to use ``abstract`` as an alias when resolving names with traits.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/use-trait.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/use-trait.ini.html","name":"Use In Traits","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 16:20:58 +0000","dateModified":"Wed, 05 Aug 2026 16:20:58 +0000","description":"``use`` is a keyword for traits and classes: it imports another trait in the current structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Use In Traits.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

trait T {
    function foo() {}
}

trait T2 {
    use T {
        T::foo as goo; // aliasing
        T::foo insteadof foo; // aliasing
        T2::foo as hoo; // aliasing
    }
    
    function foo() {}
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.importing.php)**
## Related

+ [Abstract Keyword](abstract.ini.html)
+ [Use](use.ini.html)
+ [Trait](trait.ini.html)
+ [Collision](collision.ini.html)
+ [Method Collision](method-collision.ini.html)
