# Minus -
``-`` is a native PHP operator, which allows to do subtraction on numbers, both integer and decimals, or produce the opposite of a number.

``-`` silently triggers a conversion to number, preferably integers, but otherwise decimal. It may produce a warning or a fatal error, if this is not possible.

It may also be repeated, with the pre- and post- increment operators.

It is the contrary to ``+``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/minus.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/minus.html","name":"Minus -","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"``-`` is a native PHP operator, which allows to do subtraction on numbers, both integer and decimals, or produce the opposite of a number","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Minus -.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Minus -"}]}]}</script>
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

+ [Plus +](plus.html)
+ [Pre-increment](pre-increment.html)
+ [Post-increment](post-increment.html)
+ [Sign](sign.html)
