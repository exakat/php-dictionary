# Use In Traits
``use`` imports a trait in the current structure, either another trait, a class or an enumeration. 

``use`` is a keyword for traits and classes.

The import federates all the defined structures in both traits and classes: the methods, the properties and the constants. 

There may be naming conflicts between the imported traits and the host structure: the conflicts may be between an import and the host structure, or between two distinct imported traits.

In that case, there is a mechanism to resolve the conflicts: the ``insteadof`` keyword allows the host to choose between several competing implementation. 

The ``as`` keyword is also available to create aliases from the import structures. These aliases shall not introduce new naming conflicts. It is not possible to use ``abstract`` as an alias when resolving names with traits.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use-trait.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use-trait.html","name":"Use In Traits","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 12 Aug 2026 08:20:21 +0000","dateModified":"Wed, 12 Aug 2026 08:20:21 +0000","description":"use imports a trait in the current structure, either another trait, a class or an enumeration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Use In Traits.html"]}],"keywords":["trait","use"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstract.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trait.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/collision.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-collision.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.importing.php"},{"@type":"CreativeWork","name":"Traits","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.traits.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"use-trait"}]}]}</script>
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
## See Also

+ [Traits](https://www.php.net/manual/en/language.oop5.traits.php)

## Related

+ [Abstract Keyword](abstract.html)
+ [Use](use.html)
+ [Trait](trait.html)
+ [Collision](collision.html)
+ [Method Collision](method-collision.html)
