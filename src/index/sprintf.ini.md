# sprintf
``sprintf()`` is a PHP native function, which format a string based on a format string, and one or more values. 

``sprintf()`` returns the formatted string, while ``printf()`` displays it immediately, and ``vprintf()`` writes the formatted string to a stream. There is also ``sscanf()``, which parse the string, according to the format.

``printf()`` is convenient to display text in command line, as it makes easy to use fillers and justification. 

``printf(\`` also supports named arguments, which makes the format string more flexible.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sprintf.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sprintf.ini.html","name":"sprintf","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``sprintf()`` is a PHP native function, which format a string based on a format string, and one or more values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/sprintf.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // displays 123 with 9 characters, and fills with dots any empty characters
    // ......123
    echo sprintf("%'.9d\n", 123);
    
    // same as above, without the echo command
    printf("%'.9d\n", 123);
    
    // same as above, without the echo command
    vprintf("%'.9d\n", '......123');

?>
```

**[Documentation](https://www.php.net/manual/fr/function.sprintf.php)**
## See Also

+ [Mastering PHP’s sprintf Function for Precise Formatting](https://altorouter.com/sprintf-php/)

## Related

+ [String](string.ini.html)
+ [Format](format.ini.html)
+ [sscanf()](sscanf.ini.html)
