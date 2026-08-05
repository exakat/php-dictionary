# Minus -
``-`` is a native PHP operator, which allows to do subtraction on numbers, both integer and decimals, or produce the opposite of a number.

``-`` silently triggers a conversion to number, preferably integers, but otherwise decimal. It may produce a warning or a fatal error, if this is not possible.

It may also be repeated, with the pre- and post- increment operators.

It is the contrary to ``+``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/minus.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/minus.ini.html","name":"Minus -","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``-`` is a native PHP operator, which allows to do subtraction on numbers, both integer and decimals, or produce the opposite of a number","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Minus -.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$a = 2 - 1; // 1

$a = -$a; // -1
$a = -$a; //  1

--$a; // 0
$a--; // -1 

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.arithmetic.php)**
## Related

+ [Plus +](plus.ini.html)
+ [Pre-increment](pre-increment.ini.html)
+ [Post-increment](post-increment.ini.html)
+ [Sign](sign.ini.html)
