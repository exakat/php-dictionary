# constant()
The ``constant()`` function is a native function, which provide the value of a declared global constant, a class constant or an enumeration case.

For class constant and enumeration cases, it may be replaced with the dynamic class constant syntax, introduced in version 8.3.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-function.html","name":"constant()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 16 Jun 2026 15:10:01 +0000","dateModified":"Tue, 16 Jun 2026 15:10:01 +0000","description":"The constant() function is a native function, which provide the value of a declared global constant, a class constant or an enumeration case","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"constant-function"}]}]}</script>
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

+ [Dynamic Class Constant](dynamic-class-constant.html)
+ [Class Constant Syntax](class-constant-syntax.html)
+ [Dynamic Constant](dynamic-constant.html)
