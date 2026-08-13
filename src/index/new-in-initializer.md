# New In Initializers
It is possible to use a new expression for default values of static variables, parameter and constants. 

It is not possible to use a new operator in a property definition. All elements of the instantiation must be constants, literal or constants or class constant, and available at calling time.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new-in-initializer.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/new-in-initializer.html","name":"New In Initializers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"It is possible to use a new expression for default values of static variables, parameter and constants","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/New In Initializers.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"new-in-initializer"}]}]}</script>
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

+ [new](new.html)
+ [Static Variables](static-variable.html)
+ [Constants](constant.html)
+ [Static Constant](class-constant.html)
+ [Parameter](parameter.html)
