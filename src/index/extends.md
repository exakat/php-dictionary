# extends
``extends`` is an operator of the class inheritance. It indicates that a class is built from another one, or an interface is built from another interface. As such, the properties, constants and methods of the parent class or interface are available to the newly created class, unless when they are marked with ``private`` visibility. 

``extends`` is optional. 

``extends`` is unique with a class: it is not possible to extend several classes at the same time. 

``extends`` may be multiple with interfaces.

``extends`` has a different mechanism than ``implements``: ``implements`` provide method signature but no implementation; ``extends`` provides both.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extends.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extends.html","name":"extends","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:59:15 +0000","dateModified":"Tue, 11 Aug 2026 20:59:15 +0000","description":"extends is an operator of the class inheritance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extends.html"]}],"keywords":["keyword","feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implements.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/base-class.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.inheritance.php"},{"@type":"CreativeWork","name":"Stop using \u201cextends\u201d in PHP","url":"https:\/\/blog.devgenius.io\/stop-using-extends-in-php-37c9da1cce83"},{"@type":"CreativeWork","name":"Extend or implement","url":"https:\/\/stitcher.io\/blog\/extends-vs-implements"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"extends"}]}]}</script>
```php
<?php

    class X {
        function foo() { echo 'X'; }
    }
    
    class y extends x { }
    
    // Both methods are possible 
    (new x)->foo();
    (new y)->foo();

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.inheritance.php)**
## See Also

+ [Stop using “extends” in PHP](https://blog.devgenius.io/stop-using-extends-in-php-37c9da1cce83)
+ [Extend or implement](https://stitcher.io/blog/extends-vs-implements)

## Related

+ [implements](implements.html)
+ [Base Class](base-class.html)
