# subtype
A subtype is any of the child types. It is the classes that extend the target class, with the ``extends`` keyword; it also covers all the classes that are subtypes of that child class. 

The opposite is supertype.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/subtype.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/subtype.html","name":"subtype","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 28 Aug 2026 10:07:30 +0000","dateModified":"Fri, 28 Aug 2026 10:07:30 +0000","description":"A subtype is any of the child types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/subtype.html"]}],"keywords":["type"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/supertype.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Subtyping"},{"@type":"CreativeWork","name":"Liskov substitution principle","url":"https:\/\/en.wikipedia.org\/wiki\/Liskov_substitution_principle"},{"@type":"CreativeWork","name":"Covariance and contravariance","url":"https:\/\/en.wikipedia.org\/wiki\/Covariance_and_contravariance_(computer_science)"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"subtype"}]}]}</script>
```php
<?php

    // Aparent is a supertype of AChild
    class Aparent extends Agrandparent {}
    
    class Achild extends Aparent{}
    
    // Agrandchild is a subtype of AChild
    class Agrandchild extends Achild {}
    
    // These are not subtype of AChild
    class ABrother extends Aparent{}
    
    class ASister extends Aparent{}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Subtyping)**
## See Also

+ [Liskov substitution principle](https://en.wikipedia.org/wiki/Liskov_substitution_principle)
+ [Covariance and contravariance](https://en.wikipedia.org/wiki/Covariance_and_contravariance_(computer_science))

## Related

+ [supertype](supertype.html)
