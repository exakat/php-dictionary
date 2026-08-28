# Duck Typing
In duck typing, an object is of a given type if it has all methods and properties required by that type. 

It is described by this sentence: 'If it walks like a duck and it quacks like a duck, then it must be a duck'.

This may apply to a class that offers a set of methods, that are listed in an interface, but the class doesn't implement explicitly that interface.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ducktyping.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ducktyping.html","name":"Duck Typing","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"In duck typing, an object is of a given type if it has all methods and properties required by that type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ducktyping.html"]}],"alternateName":["duck-typing"],"keywords":["concept","type","animal"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rubber-ducking.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Duck_typing"},{"@type":"CreativeWork","name":"Duck Typing in PHP","url":"https:\/\/matthiasnoback.nl\/2017\/02\/convenient-ducktyping-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ducktyping"}]}]}</script>
```php
<?php

    interface I {
        function foo() ; 
    }
    
    // class X doesn't implement i, yet it is of type i because it implements foo()
    class X {
        function foo() {}
        function bar() {}
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Duck_typing)**
## See Also

+ [Duck Typing in PHP](https://matthiasnoback.nl/2017/02/convenient-ducktyping-in-php/)

## Related

+ [Rubber Ducking Debugging](rubber-ducking.html)
