# intdiv()
``intdiv()`` is a PHP native function, that computes the integer division between two integer. The integer division of ``a`` by ``b`` express the number ``a`` as a function of ``b``, such as ``a = k * b + c``.

``intdiv()`` returns the ``k`` value, which is the quotient. It is an integer. The remainder, ``c`` is accessible with the modulo operator ``%``. There is no operator equivalent to ``intdiv()``.

The integer division is a special case of the division, which works on decimal numbers.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intdiv.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intdiv.html","name":"intdiv()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:46:08 +0000","dateModified":"Sun, 16 Aug 2026 07:46:08 +0000","description":"intdiv() is a PHP native function, that computes the integer division between two integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intdiv.html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/modulo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/division.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.intdiv.php"},{"@type":"CreativeWork","name":"Modulo (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Modulo"},{"@type":"CreativeWork","name":"fdiv","url":"https:\/\/www.php.net\/manual\/en\/function.fdiv.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"intdiv"}]}]}</script>
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
## See Also

+ [Modulo (Wikipedia)](https://en.wikipedia.org/wiki/Modulo)
+ [fdiv](https://www.php.net/manual/en/function.fdiv.php)

## Related

+ [Modulo](modulo.html)
+ [Division](division.html)
