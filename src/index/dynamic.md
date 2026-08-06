# Dynamic
Dynamic is a common concept, and may be used in three distinct situations: 

+ Dynamic call, to call a function or method whose name is in a variable
+ Dynamic constant, to call a constant whose name is in a variable
+ Dynamic property, to access a property whose name is in a variable
+ Dynamic loading, for PHP to load an extension after the start of execution
+ Dynamic variable, to access a variable whose name is in another variable.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dynamic.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dynamic.html","name":"Dynamic","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:46 +0000","dateModified":"Fri, 19 Jun 2026 21:24:46 +0000","description":"Dynamic is a common concept, and may be used in three distinct situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Dynamic.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Dynamic call of a variable
    $a = K;
    $x = 'a';
    echo $$x; // K
    
    const A = 1;
    $name = 'A';
    echo constant($name); // 1

?>
```

**[Documentation](https://www.php.net/manual/en/language.variables.variable.php)**
## See Also

+ [All the Dynamic Syntaxes in PHP](https://www.exakat.io/en/all-the-dynamic-syntaxes-in-php/)

## Related

+ [Dynamic Call](dynamic-call.ini.html)
+ [Dynamic Constant](dynamic-constant.ini.html)
+ [Dynamic Properties](dynamic-property.ini.html)
+ [Dynamic Loading](dynamic-loading.ini.html)
+ [Dynamic Variable](dynamic-variable.ini.html)
+ [Variable Variables](variable-variable.ini.html)
+ [static](static.ini.html)
+ [Dynamic Class Constant](dynamic-class-constant.ini.html)
+ [Dynamic Method](dynamic-method.ini.html)
