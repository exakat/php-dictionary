# Type Invariant
A type invariant is a data container whose type can't change between a parent class and a child class. This is the case of properties.

The child type must be a subtype of the parent type and the parent type must be a subtype of the child type. This implies that the types are equal.

Invariance is the third type of variance, with contravariance and covariance.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/invariant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/invariant.html","name":"Type Invariant","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:38 +0000","dateModified":"Fri, 19 Jun 2026 21:24:38 +0000","description":"A type invariant is a data container whose type can't change between a parent class and a child class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Type Invariant.html"]}],"keywords":["type"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-covariance.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-contravariance.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Covariance_and_contravariance_(computer_science)"},{"@type":"CreativeWork","name":"Type variance in PHP","url":"https:\/\/www.npopov.com\/2021\/11\/08\/Type-variance-in-PHP.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"invariant"}]}]}</script>
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

+ [Covariance](type-covariance.html)
+ [Contravariance](type-contravariance.html)
