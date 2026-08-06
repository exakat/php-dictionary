# Contravariance
Contravariance allows a parameter type to be less specific in a child method, than that of its parent. 

This means that a parameter ``$param`` in the method ``foo`` of the child class ``X`` can be a parent of the type in the method ``foo`` of the parent class. 

Less specific types can be: the same type ``W``, a parent class of the ``W`` type, here ``V``, an interface implemented by the type ``W``, a union type, such as ``W|string``. In particular, the type may become nullable. 

It cannot be a totally different type, an intersectional type, such as ``W&A``, a different class that implements the same interface than ``W``, or a different scalar type. 
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/type-contravariance.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/type-contravariance.html","name":"Contravariance","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Contravariance allows a parameter type to be less specific in a child method, than that of its parent","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Contravariance.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class V {}

class W extends V {
    // This method accepts an object compatible with w, but less specific
    function foo(W $param) { }
}

class X extends W {
    function foo(V $param) { }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.variance.php)**
## See Also

+ [Covariance and Contravariance in PHP](https://dev.to/ashallendesign/covariance-and-contravariance-in-php-3cim)

## Related

+ [Covariance](type-covariance.ini.html)
+ [Nullable](nullable.ini.html)
+ [Intersection Type](intersectional.ini.html)
+ [Union Type](union.ini.html)
+ [Scalar Types](scalar.ini.html)
+ [Type Invariant](invariant.ini.html)
+ [Liskov Substitution Principle (LSP)](liskov.ini.html)
