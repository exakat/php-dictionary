# Class Hierarchy
The class hierarchy is a list of classes, which are extending one from another. The extended classes are parents, and the extending classes are children. Classes extending the same class are also called siblings. 

The depth of the class hierarchy is a measure of the complexity.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-hierarchy.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-hierarchy.html","name":"Class Hierarchy","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:32:14 +0000","dateModified":"Mon, 20 Jul 2026 08:32:14 +0000","description":"The class hierarchy is a list of classes, which are extending one from another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-hierarchy.html"]}],"keywords":["class"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inheritance.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Class_hierarchy"},{"@type":"CreativeWork","name":"PHP classes","url":"https:\/\/phplang.org\/spec\/14-classes"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"class-hierarchy"}]}]}</script>
```php
<?php

    class A {}
    
    class B extends A {}
    
    class C extends B {}
    
    class D1 extends C {}
    class D2 extends C {}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Class_hierarchy)**
## See Also

+ [PHP classes](https://phplang.org/spec/14-classes)

## Related

+ [parent](parent.html)
+ [Inheritance](inheritance.html)
