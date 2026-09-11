# Methodcall
A method call is the actual usage of a method. It requires an object, the method name and the arguments for the method. 

A method call is based on an object, and the ``->`` and ``?->`` operators. A method call may be static: the operator is then ``::``, and the left operand is a class name, expressed as a string; although, it may also be an object, though the class of that object is used, not the object itself.

Methods may be called by using the array syntax: ``array($object, $methodname)($arguments)``.

Method call may be chained. This means that the method returns an object, either the current one or another; then another call of method is built on top of this call. 

Static methods must be called statically. Method must be called non-statically, although it is possible to call them statically within a class: this is convenient for ``parent::__construct()``, for example.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/methodcall.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/methodcall.html","name":"Methodcall","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 10 Sep 2026 20:18:51 +0000","dateModified":"Thu, 10 Sep 2026 20:18:51 +0000","description":"A method call is the actual usage of a method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/methodcall.html"]}],"keywords":["syntax"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fluent-interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/chaining.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.basic.php#language.oop5.basic.properties-methods"},{"@type":"CreativeWork","name":"PHP Method Calls Tutorial","url":"https:\/\/www.ptutorials.com\/elearning\/php\/phpmethodcalls.php"},{"@type":"CreativeWork","name":"Method Chaining","url":"https:\/\/en.wikipedia.org\/wiki\/Method_chaining"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.35","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"methodcall"}]}]}</script>
```php
<?php

    class Elephpant {
        function trumpet($a) {}

        static function stampede($b) {}
    }

    $elephpant = new elephpant;

    // a method call
    $elephpant->trumpet(1);
    [$elephpant, 'trumpet'](1);

    // a static method call
    elephpant::stampede(2);
    $elephpant::stampede(3);
    elephpant::class::stampede(4);
    [elephpant::class, 'stampede'](1);

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.properties-methods)**
## See Also

+ [PHP Method Calls Tutorial](https://www.ptutorials.com/elearning/php/phpmethodcalls.php)
+ [Method Chaining](https://en.wikipedia.org/wiki/Method_chaining)

## Related

+ [Fluent Interface](fluent-interface.html)
+ [Chaining](chaining.html)
