# DivisionByZeroError
The ``DivisionByZeroError`` exception is thrown when an attempt is made to divide a number by zero. It is never possible to divide by zero, the result is undefined. It is true for all zeroes: ``0``, ``+0``, ``-0``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/divisionbyzeroerror.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/divisionbyzeroerror.ini.html","name":"DivisionByZeroError","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 08:01:59 +0000","dateModified":"Tue, 07 Jul 2026 08:01:59 +0000","description":"The ``DivisionByZeroError`` exception is thrown when an attempt is made to divide a number by zero","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/DivisionByZeroError.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    try {
        echo 1 / $a;
    } catch(DivisionByZeroError $e){
        echo 'Trying to divide by 0';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.divisionbyzeroerror.php)**
## Related

+ [Error](error.ini.html)
+ [ArithmeticError Error](arithmeticerror.ini.html)
+ [Division](division.ini.html)
+ [zero](zero.ini.html)
