# STDOUT
``stdout`` refers to the standard output stream. It is a common term used in programming to represent the destination for standard output data. 

Native PHP functions echo and print typically send their argument to the standard output stream.

The standard output stream is explicitly available with the constant ``STDOUT``. This is a writeonly stream. 

The standard output is also available via the protocol ``php``, with the special URI ``stdout``. This is a writeonly stream.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/stdout.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/stdout.html","name":"STDOUT","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``stdout`` refers to the standard output stream","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/STDOUT.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // implicitely write to the standard output
    echo 'Hello world';
    
    // explicitely write to the standard output
    fwrite(STDOUT, 'Hello world');
    
    // explicitely write to the standard output
    $fp = fopen('php://stdout', 'w');
    fwrite($fp, 'Hello world');

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.constants.php)**
## See Also

+ [PHP Protocol](https://www.php.net/manual/en/wrappers.php.php)

## Related

+ [Echo](echo.ini.html)
+ [Print](print.ini.html)
+ [Stream](stream.ini.html)
+ [Pipe Operator](pipe.ini.html)
+ [Log](log.ini.html)
