# INF
Infinite is a PHP constant, called ``INF``. It is also possible to generate such a value, with calls to math functions such as ``log(0)`` or ``1e308 * 2``.

While the infinite is a float, it is possible to test a number with ``is_infinite()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inf.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inf.html","name":"INF","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 08:01:57 +0000","dateModified":"Sun, 16 Aug 2026 08:01:57 +0000","description":"Infinite is a PHP constant, called INF","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/INF.html"]}],"keywords":["number","native constant"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/infinite.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arithmeticerror.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/e.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/infinite-loop.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-numeric.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/math.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/math.constants.php"},{"@type":"CreativeWork","name":"is_infinite","url":"https:\/\/www.php.net\/manual\/en\/function.is-infinite.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"inf"}]}]}</script>
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

+ [is_infinite](https://www.php.net/manual/en/function.is-infinite.php)

## Related

+ [Infinite](infinite.html)
+ [ArithmeticError Error](arithmeticerror.html)
+ [E](e.html)
+ [Infinite Loop](infinite-loop.html)
+ [Non-numeric](non-numeric.html)
+ [Math](math.html)
