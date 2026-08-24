# Contravariance
Contravariance allows a parameter type to be less specific in a child method, than that of its parent. 

This means that a parameter ``$param`` in the method ``foo`` of the child class ``X`` can be a parent of the type in the method ``foo`` of the parent class. 

Less specific types can be: the same type ``W``, a parent class of the ``W`` type, here ``V``, an interface implemented by the type ``W``, a union type, such as ``W|string``. In particular, the type may become nullable. 

It cannot be a totally different type, an intersection type, such as ``W&A``, a different class that implements the same interface as ``W``, or a different scalar type. 
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-contravariance.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-contravariance.html","name":"Contravariance","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 07:40:52 +0000","dateModified":"Mon, 24 Aug 2026 07:40:52 +0000","description":"Contravariance allows a parameter type to be less specific in a child method, than that of its parent","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-contravariance.html"]}],"alternateName":["contravariance"],"keywords":["type"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-covariance.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nullable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intersectional.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/union.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scalar.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/invariant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/liskov.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.variance.php"},{"@type":"CreativeWork","name":"Covariance and Contravariance in PHP","url":"https:\/\/dev.to\/ashallendesign\/covariance-and-contravariance-in-php-3cim"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"type-contravariance"}]}]}</script>
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

+ [Covariance](type-covariance.html)
+ [Nullable](nullable.html)
+ [Intersection Type](intersectional.html)
+ [Union Type](union.html)
+ [Scalar Types](scalar.html)
+ [Type Invariant](invariant.html)
+ [Liskov Substitution Principle (LSP)](liskov.html)
