# Static Call
A static call is a call to a structure, where the name of the structure is hardcoded.

A static method may be called with a static call, or with a dynamic call. Both are valid.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-call.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-call.html","name":"Static Call","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 28 Aug 2026 10:11:37 +0000","dateModified":"Fri, 28 Aug 2026 10:11:37 +0000","description":"A static call is a call to a structure, where the name of the structure is hardcoded","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-call.html"]}],"keywords":["dynamic","syntax"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-call.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-class.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.static.php"},{"@type":"CreativeWork","name":"Late Static Bindings","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.late-static-bindings.php"},{"@type":"CreativeWork","name":"Method (computer programming)","url":"https:\/\/en.wikipedia.org\/wiki\/Method_(computer_programming)"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"static-call"}]}]}</script>
```php
<?php

    class X {
        static function foo() {}
    }
    
    new X(); // static call
    
    $class = X::class;
    new $class(); // dynamic call
    
    X::foo(); // static call of a static method
    $class::foo(); // dynamic call of a static method

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.static.php)**
## See Also

+ [Late Static Bindings](https://www.php.net/manual/en/language.oop5.late-static-bindings.php)
+ [Method (computer programming)](https://en.wikipedia.org/wiki/Method_(computer_programming))

## Related

+ [new](new.html)
+ [Dynamic Call](dynamic-call.html)
+ [Dynamic Class](dynamic-class.html)
