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
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous.html","name":"Anonymous","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"An anonymous structure is a structure that usually has a name, but may also go without it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Anonymous.html"]}],"keywords":["concept","adjective"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-catch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-call.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__invoke.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anonymous-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name-convention.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/structure.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.anonymous.php"},{"@type":"CreativeWork","name":"The Art of Being Anonymous in PHP","url":"https:\/\/www.exakat.io\/the-art-of-being-anonymous-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"anonymous"}]}]}</script>
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

+ [Anonymous Function](anonymous-function.html)
+ [Anonymous Class](anonymous-class.html)
+ [Anonymous Catch](anonymous-catch.html)
+ [Dynamic Call](dynamic-call.html)
+ [\_\_invoke() Method](__invoke.html)
+ [Anonymous Constant](anonymous-constant.html)
+ [Name Conventions](name-convention.html)
+ [Name](name.html)
+ [Structure](structure.html)
