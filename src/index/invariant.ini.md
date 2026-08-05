# Type Invariant
A type invariant is a data container whose type can't change between a parent class and a child class. This is the case of properties.

The child type must be a subtype of the parent type and the parent type must be a subtype of the child type. This implies that the types are equal.

Invariance is the third type of variance, with contravariance and covariance.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/invariant.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/invariant.ini.html","name":"Type Invariant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:38 +0000","dateModified":"Fri, 19 Jun 2026 21:24:38 +0000","description":"A type invariant is a data container whose type can't change between a parent class and a child class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Type Invariant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class p {
    protected string $p;
}

class q extends p {
    // same a above
    protected string $p;
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Covariance_and_contravariance_(computer_science))**
## See Also

+ [Type variance in PHP](https://www.npopov.com/2021/11/08/Type-variance-in-PHP.html)

## Related

+ [Covariance](type-covariance.ini.html)
+ [Contravariance](type-contravariance.ini.html)
