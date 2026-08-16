# Methodcall
A method call is the actual usage of a method. It requires an object, the method name and the arguments for the method. 

A method call is based on an object, and the ``->`` and ``?->`` operators. A method call may be static: the operator is then ``::``, and the left operand is a class name, expressed as a string; although, it may also be an object, though the class of that object is used, not the object itself.

Methods may be called by using the array syntax: ``array($object, $methodname)($arguments)``.

Method call may be chained. This means that the method returns an object, either the current one or another; then another call of method is built on top of this call. 

Static methods must be called statically. Method must be called non-statically, although it is possible to call them statically within a class: this is convenient for ``parent::__construct()``, for example.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/methodcall.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/methodcall.html","name":"Methodcall","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 08:18:34 +0000","dateModified":"Thu, 13 Aug 2026 08:18:34 +0000","description":"A method call is the actual usage of a method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Methodcall.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"methodcall"}]}]}</script>
```php
<?php

    class X {
        function foo($a) {}
        
        static function bar($b) {}
    }
    
    $x = new x;
    
    // a method call
    $x->foo(1);
    [$x, 'foo'](1);
    
    // a static method call
    x::bar(2);
    $x::bar(3);
    x::class::bar(4);
    [x::class, 'bar'](1);

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.properties-methods)**
## See Also

+ [PHP Method Calls Tutorial](https://www.ptutorials.com/elearning/php/phpmethodcalls.php)
+ [Method Chaining](https://en.wikipedia.org/wiki/Method_chaining)

## Related

+ [Fluent Interface](fluid-interface.html)
+ [Chaining](chaining.html)
