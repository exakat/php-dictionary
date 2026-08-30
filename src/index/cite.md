# Class Interface Trait Enumeration (CITE)
CITE stands for Class Interface Trait Enumeration. It represents all four types of PHP structures, also called classlike structures, when they interact together.

In particular, all four of them share the same namespaces, which may create naming conflicts. This is unlike functions and constants, which both have their own namespaces.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cite.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cite.html","name":"Class Interface Trait Enumeration (CITE)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 30 Aug 2026 09:21:24 +0000","dateModified":"Sun, 30 Aug 2026 09:21:24 +0000","description":"CITE stands for Class Interface Trait Enumeration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cite.html"]}],"alternateName":["classlike"],"keywords":["acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trait.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enum.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.php"},{"@type":"CreativeWork","name":"Object Interfaces","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.interfaces.php"},{"@type":"CreativeWork","name":"Enumerations","url":"https:\/\/www.php.net\/manual\/en\/language.enumerations.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cite"}]}]}</script>
```php
<?php

    class C {}
    
    interface I {}
    
    trait T {}
    
    enum E {}
    
    const C = 1;
    function C() {} 

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.php)**
## See Also

+ [Object Interfaces](https://www.php.net/manual/en/language.oop5.interfaces.php)
+ [Enumerations](https://www.php.net/manual/en/language.enumerations.php)

## Related

+ [Class](class.html)
+ [Trait](trait.html)
+ [Interface](interface.html)
+ [Enumeration (enum)](enum.html)
