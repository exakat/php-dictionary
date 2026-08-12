# sscanf()
``sscanf()`` is a built-in PHP function that parses input from a string according to a format string.

``sscanf()`` is the opposite feature of ``printf()``: the same format may be used to parse or print data.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sscanf.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sscanf.html","name":"sscanf()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 08:05:33 +0000","dateModified":"Tue, 07 Jul 2026 08:05:33 +0000","description":"sscanf() is a built-in PHP function that parses input from a string according to a format string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sscanf().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sscanf"}]}]}</script>
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

+ [printf()](printf.html)
+ [sprintf](sprintf.html)
