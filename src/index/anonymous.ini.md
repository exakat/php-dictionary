# Anonymous
An anonymous structure is a structure that usually has a name, but may also go without it. When the structure is anonymous, some features are not available, such as creating or calling a new instance by using its name. Such operations must now handled by creating the asset, and handing it across the code base.

There a several structures which have an anonymous version: 

+ Functions: there are two types: closures and arrow functions
+ Method: the magic method ``__invoke()``
+ Classes
+ Constants: basically, it is a literal value
+ Catch: in this case, the exception is caught, but it is not provided in a related variable

Some structures are always named: variables, properties, traits, interfaces, enums.

Anonymous structures should not be confused with dynamic structures: these structures are defined with a name which is stored in a variable, or a similar data container. In fact, dynamic structures often rely on a name to be usable. This is the case of variables, with ``$$variable``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/anonymous.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/anonymous.ini.html","name":"Anonymous","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:29 +0000","dateModified":"Fri, 19 Jun 2026 21:24:29 +0000","description":"An anonymous structure is a structure that usually has a name, but may also go without it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Anonymous.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $closure = function () {} ; 

    $arrowFunction = fn() => 1;
    
    'literal value';
    
    // an object of an anonymous class
    new class() {}; 
    
    try {}
    catch(Exception ) {}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.anonymous.php)**
## See Also

+ [The Art of Being Anonymous in PHP](https://www.exakat.io/the-art-of-being-anonymous-in-php/)

## Related

+ [Anonymous Function](anonymous-function.ini.html)
+ [Anonymous Class](anonymous-class.ini.html)
+ [Anonymous Catch](anonymous-catch.ini.html)
+ [Dynamic Call](dynamic-call.ini.html)
+ [\_\_invoke() Method](__invoke.ini.html)
+ [Anonymous Constant](anonymous-constant.ini.html)
+ [Name Conventions](name-convention.ini.html)
+ [Name](name.ini.html)
+ [Structure](structure.ini.html)
