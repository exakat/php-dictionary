# Static Call
A static call is a call to a structure, where the name of the structure is hardcoded.

A static method may be called with a static call, or with a dynamic call. Both are valid.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/static-call.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/static-call.ini.html","name":"Static Call","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:01 +0000","dateModified":"Fri, 19 Jun 2026 21:24:01 +0000","description":"A static call is a call to a structure, where the name of the structure is hardcoded","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Static Call.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [new](new.ini.html)
+ [Dynamic Call](dynamic-call.ini.html)
+ [Dynamic Class](dynamic-class.ini.html)
