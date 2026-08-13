# ValueError
A ``ValueError`` is thrown when the type of an argument is correct but the value of it is incorrect. 

It is a PHP error, and not an exception, it is thrown by PHP native functions. 
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/valueerror.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/valueerror.html","name":"ValueError","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A ValueError is thrown when the type of an argument is correct but the value of it is incorrect","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ValueError.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"valueerror"}]}]}</script>
```php
<?php

    $hexadecimal = 'a37334';
    
    // -2 is not a valid number base : it should be 2 or more.
    // Argument #2 ($from_base) must be between 2 and 36 (inclusive)
    echo base_convert($hexadecimal, 0, 2);
    
    // Third argument is for the starting offset. Here, this is beyond the end of the string
    // as such, the offset has a valid type (integer), but its value is not correct (out of range)
    $a = strpos("p", "php", 16);

?>
```

**[Documentation](https://www.php.net/manual/en/class.valueerror.php)**
## See Also

+ [PHP 8.0: New ValueError Error Exception](https://php.watch/versions/8.0/ValueError)

## Related

+ [Error](error.html)
+ [Exception](exception.html)
+ [json\_decode()](json_decode.html)
