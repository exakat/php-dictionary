# sscanf()
``sscanf()`` is a built-in PHP function that parses input from a string according to a format string.

``sscanf()`` is the opposite feature of ``printf()``: the same format may be used to parse or print data.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sscanf.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sscanf.ini.html","name":"sscanf()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 08:05:33 +0000","dateModified":"Tue, 07 Jul 2026 08:05:33 +0000","description":"``sscanf()`` is a built-in PHP function that parses input from a string according to a format string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sscanf().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $date = January 01 2000;
    list($month, $day, $year) = sscanf($date, %s %d %d);
    
    print(%s %d %d, $month, $day, $year);

?>
```

**[Documentation](https://www.php.net/manual/en/function.sscanf.php)**
## See Also

+ [PHP sscanf() Function](https://www.geeksforgeeks.org/php/php-sscanf-function/)

## Related

+ [printf()](printf.ini.html)
+ [sprintf](sprintf.ini.html)
