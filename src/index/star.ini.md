# Star \*
``*`` is a character, used in various situations: 

+ Multiplication: ``3 * 2 == 6``
+ Power: ``3 ** 2 == 3 * 3 == 9``
+ With slash, ``/*`` is a multi line comment: ``/* */``
+ With double star and a slash, ``/**`` is a phpdoc comment: ``/** */``.
+ As a wildcard in ``glob()`` calls
+ As a wildcard in ``fnmatch()`` calls
+ As a wildcard for all columns in SQL queries: ``SELECT * FROM table``
+ As a quantifier in regex: 0 or more, i.e. ``/a*/``
+ As part of a multiline comment with ``/** */`` and ``/* */``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/star.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/star.ini.html","name":"Star *","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 16:54:36 +0000","dateModified":"Mon, 20 Jul 2026 16:54:36 +0000","description":"``*`` is a character, used in various situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Star *.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    file_get_contents('/tmp/test.txt');
    
    echo 2 * 3; // 6 
    echo 2 ** 3; // * 
    
    /*
     A multiline comment
    */

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Asterisk)**
## Related

+ [Multiplication](multiplication.ini.html)
+ [Comments](comment.ini.html)
+ [Exponential](exponential.ini.html)
+ [Regular Expression](regex.ini.html)
+ [Structured Query Language (SQL)](sql.ini.html)
+ [glob()](glob.ini.html)
+ [fnmatch()](fnmatch.ini.html)
