# Duck Typing
In duck typing, an object is of a given type if it has all methods and properties required by that type. 

It is described by this sentence: 'If it walks like a duck and it quacks like a duck, then it must be a duck'.

This may apply to a class that offers a set of methods, that are listed in an interface, but the class doesn't implement explicitly that interface.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ducktyping.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ducktyping.ini.html","name":"Duck Typing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:54:45 +0000","dateModified":"Thu, 09 Jul 2026 08:54:45 +0000","description":"In duck typing, an object is of a given type if it has all methods and properties required by that type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Duck Typing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Rubber Ducking Debugging](rubber-ducking.ini.html)
