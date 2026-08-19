# sqrt()
``sqrt()`` is a PHP native function, that computes the square root of a number. That function takes a integer or a float, and returns the same types, depending on the actual value of the result.

``sqrt()`` is not a particularly slow function. The opposite of ``sqrt()`` is ``** 2``, or ``pow($x, 2)``, or even ``$x * $x``, where ``$x`` is the result of ``sqrt()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sqrt.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sqrt.html","name":"sqrt()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"sqrt() is a PHP native function, that computes the square root of a number","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sqrt().html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/power.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exponential.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hypot.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.sqrt.php"},{"@type":"CreativeWork","name":"PHP Math Functions: Understanding the Basics","url":"https:\/\/wpshout.com\/php-math-functions\/#gref"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sqrt"}]}]}</script>
```php
<?php

    $a = 4;
    var_dump(sqrt($a));
    
    $b = 5;
    var_dump(sqrt($b));

?>
```

**[Documentation](https://www.php.net/manual/en/function.sqrt.php)**
## See Also

+ [PHP Math Functions: Understanding the Basics](https://wpshout.com/php-math-functions/#gref)

## Related

+ [Exponent](power.html)
+ [Exponential](exponential.html)
+ [hypot()](hypot.html)
