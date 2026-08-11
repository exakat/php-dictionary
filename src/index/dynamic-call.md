# Dynamic Call
A dynamic call happens when part of the syntax comes from a variable, and is not known at code writing time.

PHP allows every syntax to be used as a dynamic call.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-call.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-call.html","name":"Dynamic Call","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A dynamic call happens when part of the syntax comes from a variable, and is not known at code writing time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Dynamic Call.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dynamic-call"}]}]}</script>
```php
<?php

    $constant = 'Name';
    echo constant($constant); 
    echo constant("someClass::$constant"); 
    
    $variable = 'a';
    $a = 'b';
    echo $$variable; // b
    
    $function = 'mine';
    $function($arg);
    
    $className = '\stdclass';
    new $className;
    
    $method = 'method';
    $object->$method();
    
    echo $object::CONSTANT;

?>
```

**[Documentation](https://www.php.net/manual/en/language.generators.syntax.php#control-structures.yield.from)**
## See Also

+ [All the Dynamic Syntaxes in PHP](https://www.exakat.io/en/all-the-dynamic-syntaxes-in-php/)

## Related

+ [Anonymous](anonymous.html)
+ [Code Injection](code-injection.html)
+ [Dynamic](dynamic.html)
+ [Static Call](static-call.html)
