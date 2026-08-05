# ValueError
A ``ValueError`` is thrown when the type of an argument is correct but the value of it is incorrect. 

It is a PHP error, and not an exception, it is thrown by PHP native functions. 
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/valueerror.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/valueerror.ini.html","name":"ValueError","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A ``ValueError`` is thrown when the type of an argument is correct but the value of it is incorrect","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ValueError.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Error](error.ini.html)
+ [Exception](exception.ini.html)
+ [json\_decode()](json_decode.ini.html)
