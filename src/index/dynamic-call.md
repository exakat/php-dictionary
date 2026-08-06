# Dynamic Call
A dynamic call happens when part of the syntax comes from a variable, and is not known at code writing time.

PHP allows every syntax to be used as a dynamic call.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dynamic-call.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dynamic-call.html","name":"Dynamic Call","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A dynamic call happens when part of the syntax comes from a variable, and is not known at code writing time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Dynamic Call.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Anonymous](anonymous.ini.html)
+ [Code Injection](code-injection.ini.html)
+ [Dynamic](dynamic.ini.html)
+ [Static Call](static-call.ini.html)
