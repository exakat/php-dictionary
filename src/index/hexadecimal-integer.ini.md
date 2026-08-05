# Hexadecimal Integer
Hexadecimal integers are integers with an hexadecimal representation. Their value is the same, yet their are written in a different way than the common decimal. 

Hexadecimal has native support with the ``0x123`` format. There is also support for hexadecimal characters, inside double-quote strings, with the ``\xhh`` syntax.

There are functions to convert from and to hexadecimal format: ``hexdec()``, ``dechex()`` and ``base_convert()``, from ten to sixteen, and then, with an arbitrary base, up to 36.

PHP also has special syntax for binary and octal numbers.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hexadecimal-integer.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/hexadecimal-integer.ini.html","name":"Hexadecimal Integer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 07:59:36 +0000","dateModified":"Fri, 03 Jul 2026 07:59:36 +0000","description":"Hexadecimal integers are integers with an hexadecimal representation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Hexadecimal Integer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $twenty    = 0x14;
    $twentyToo = 20;
    
    $i = "\x69"; // i is the 105 ASCII code
    $i = 'i';

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.integer.php)**
## See Also

+ [Hexadecimal on Wikipedia](https://en.wikipedia.org/wiki/Hexadecimal)

## Related

+ [Binary Integer](binary-integer.ini.html)
+ [Octal Integer](octal-integer.ini.html)
+ [Floating Point Numbers](decimal.ini.html)
+ [Base](base.ini.html)
