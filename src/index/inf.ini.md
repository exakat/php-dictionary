# INF
Infinite is a PHP constant, called ``INF``. It is also possible to generate such a value, with calls to math functions such as ``log(0)`` or ``1e308 * 2``.

While the infinite is a float, it is possible to test a number with ``is_infinite()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/inf.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/inf.ini.html","name":"INF","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Infinite is a PHP constant, called ``INF``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/INF.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$infinite = 1e308 * 2;

var_dump(is_infinite($infinite)); // true 

var_dump(INF === $infinite);      // true 

echo str_repeat('1', 1000) + 0;  // INF

?>
```

**[Documentation](https://www.php.net/manual/en/math.constants.php)**
## See Also

+ [is_infinite()](https://www.php.net/manual/en/function.is-infinite.php)

## Related

+ [Infinite](infinite.ini.html)
+ [ArithmeticError Error](arithmeticerror.ini.html)
+ [E](e.ini.html)
+ [Infinite Loop](infinite-loop.ini.html)
+ [Non-numeric](non-numeric.ini.html)
+ [Math](math.ini.html)
