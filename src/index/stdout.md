# STDOUT
``stdout`` refers to the standard output stream. It is a common term used in programming to represent the destination for standard output data. 

Native PHP functions echo and print typically send their argument to the standard output stream.

The standard output stream is explicitly available with the constant ``STDOUT``. This is a write-only stream.

The standard output is also available via the protocol ``php``, with the special URI ``stdout``. This is a write-only stream.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stdout.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stdout.html","name":"STDOUT","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:32:50 +0000","dateModified":"Sat, 08 Aug 2026 14:32:50 +0000","description":"``stdout`` refers to the standard output stream","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/STDOUT.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"STDOUT"}]}]}</script>
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

+ [Echo](echo.html)
+ [Print](print.html)
+ [Stream](stream.html)
+ [Pipe ``|``, The Logical Operator](pipe.html)
+ [Log](log.html)
