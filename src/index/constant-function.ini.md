# constant()
The ``constant()`` function is a native function, which provide the value of a declared global constant, a class constant or an enumeration case.

For class constant and enumeration cases, it may be replaced with the dynamic class constant syntax, introduced in version 8.3.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/constant-function.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/constant-function.ini.html","name":"constant()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 16 Jun 2026 15:10:01 +0000","dateModified":"Tue, 16 Jun 2026 15:10:01 +0000","description":"The ``constant()`` function is a native function, which provide the value of a declared global constant, a class constant or an enumeration case","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/constant().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    const A = 1;
    
    echo constant('A');
    
    enum E: string {
        case B = 'abc';
        const C = 'def';
    }
    
    echo constant('E::B')->value; // abc
    echo constant('E::C');        // def

?>
```

**[Documentation](https://www.php.net/constant)**
## Related

+ [Dynamic Class Constant](dynamic-class-constant.ini.html)
+ [Class Constant Syntax](class-constant-syntax.ini.html)
+ [Dynamic Constant](dynamic-constant.ini.html)
