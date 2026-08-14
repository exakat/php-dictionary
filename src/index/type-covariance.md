# Covariance
Covariance allows a child's method to return a more specific type than the return type of its parent's method.

This means that the type of the return value in the method ``foo`` of the child class ``X`` can be a child of the type of the return value in the method ``foo`` of the parent class ``W``. 

Less specific types can be: the same type ``W``, a child class of the ``W`` type, here ``X``, an intersectional type, such as ``W&Z``. In particular, the type may not become nullable. 

It cannot be a totally different type, an union type, such as ``W|A``, any class that implements the same interfaces than ``W``, or a different scalar type.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-covariance.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-covariance.html","name":"Covariance","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Covariance allows a child's method to return a more specific type than the return type of its parent's method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Covariance.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"type-covariance"}]}]}</script>
```php
<?php

    class V {}
    
    class W extends V {
        function foo() : W { }
    }
    
    class X extends W {
        // This method returns an object compatible with w, but more specific
        function foo() : X { }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.variance.php)**
## See Also

+ [Type variance in PHP](https://www.npopov.com/2021/11/08/Type-variance-in-PHP.html)
+ [Covariance and Contravariance in PHP](https://dev.to/ashallendesign/covariance-and-contravariance-in-php-3cim)

## Related

+ [Contravariance](type-contravariance.html)
+ [Type Invariant](invariant.html)
+ [LSP](lsp.html)
+ [Return Type](return-type.html)
+ [Return](return.html)
+ [Liskov Substitution Principle (LSP)](liskov.html)
