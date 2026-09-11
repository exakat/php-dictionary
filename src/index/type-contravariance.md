# Contravariance
Contravariance allows a parameter type to be less specific in a child method, than that of its parent.

This means that a parameter ``$trunk`` in the method ``trumpet`` of the child class ``Calf`` can be a parent of the type in the method ``trumpet`` of the parent class.

Less specific types can be: the same type ``AfricanElephpant``, a parent class of the ``AfricanElephpant`` type, here ``Elephpant``, an interface implemented by the type ``AfricanElephpant``, a union type, such as ``AfricanElephpant|string``. In particular, the type may become nullable.

It cannot be a totally different type, an intersection type, such as ``AfricanElephpant&A``, a different class that implements the same interface as ``AfricanElephpant``, or a different scalar type. 
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-contravariance.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-contravariance.html","name":"Contravariance","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 10 Sep 2026 20:18:51 +0000","dateModified":"Thu, 10 Sep 2026 20:18:51 +0000","description":"Contravariance allows a parameter type to be less specific in a child method, than that of its parent","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-contravariance.html"]}],"alternateName":["contravariance"],"keywords":["type"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-covariance.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nullable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intersection-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/union-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scalar-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/invariant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/liskov.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.variance.php"},{"@type":"CreativeWork","name":"Covariance and Contravariance in PHP","url":"https:\/\/dev.to\/ashallendesign\/covariance-and-contravariance-in-php-3cim"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.35","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"type-contravariance"}]}]}</script>
```php
<?php

class Elephpant {}

class AfricanElephpant extends Elephpant {
    // This method accepts an object compatible with AfricanElephpant, but less specific
    function trumpet(AfricanElephpant $trunk) { }
}

class Calf extends AfricanElephpant {
    function trumpet(Elephpant $trunk) { }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.variance.php)**
## See Also

+ [Covariance and Contravariance in PHP](https://dev.to/ashallendesign/covariance-and-contravariance-in-php-3cim)

## Related

+ [Covariance](type-covariance.html)
+ [Nullable](nullable.html)
+ [Intersection Type](intersection-type.html)
+ [Union Type](union-type.html)
+ [Scalar Types](scalar-type.html)
+ [Type Invariant](invariant.html)
+ [Liskov Substitution Principle (LSP)](liskov.html)
