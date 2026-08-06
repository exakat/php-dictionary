# New In Initializers
It is possible to use a new expression for default values of static variables, parameter and constants. 

It is not possible to use a new operator in a property definition. All elements of the instantiation must be constants, literal or constants or class constant, and available at calling time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/new-in-initializer.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/new-in-initializer.html","name":"New In Initializers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 07:58:30 +0000","dateModified":"Mon, 13 Jul 2026 07:58:30 +0000","description":"It is possible to use a new expression for default values of static variables, parameter and constants","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/New In Initializers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class B {
        function __construct(private int $i) {}
    }
    
    function headers($a = new B(3)) : B {
        return $a;
    }

?>
```

**[Documentation](https://wiki.php.net/rfc/new_in_initializers)**
## See Also

+ [Initialize objects right into the constructor parameters in PHP 8.1](https://www.amitmerchant.com/initialize-objects-right-into-the-constructor-parameters-in-php-81/)

## Related

+ [new](new.ini.html)
+ [Static Variables](static-variable.ini.html)
+ [Constants](constant.ini.html)
+ [Static Constant](class-constant.ini.html)
+ [Parameter](parameter.ini.html)
