# intdiv()
``intdiv()`` is a PHP native function, that computes the integer division between two integer. The integer division of ``a`` by ``b`` express the number ``a`` as a function of ``b``, such as ``a = k * b + c``.

``intdiv()`` returns the ``k`` value, which is the quotient. It is an integer. The remainder, ``c`` is accessible with the modulo operator ``%``. There is no operator equivalent to ``intdiv()``.

The integer division is a special case of the division, which works on decimal numbers.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/intdiv.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/intdiv.html","name":"intdiv()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``intdiv()`` is a PHP native function, that computes the integer division between two integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/intdiv().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$a = 15;

$b = 6;

$k = intdiv($a, $b); // 2 
$c = $a % $b; // 3

echo $k * $b + $c;

?>
```

**[Documentation](https://www.php.net/manual/en/function.intdiv.php)**
## Related

+ [Modulo](modulo.ini.html)
+ [Division](division.ini.html)
