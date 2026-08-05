# extends
``extends`` is an operator of the class inheritance. It indicates that a class is built from another one, or an interface is built from another interface. As such, the properties, constants and methods of the parent class or interface are available to the newly created class, unless when they are marked with ``private`` visibility. 

``extends`` is optional. 

``extends`` is unique with a class: it is not possible to extends several classes at the same time. 

``extends`` may be multiple with interfaces.

``extends`` has a different mechanism than ``implements``: ``implements`` provide method signature but no implementation; ``extends`` provides both.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/extends.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/extends.ini.html","name":"extends","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``extends`` is an operator of the class inheritance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/extends.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [implements](implements.ini.html)
+ [Base Class](base-class.ini.html)
