# Decrement
Decrement refers to the process of decreasing or subtracting a small amount from a value, or simply one unit.

Decrement usually refers to the pre-decrement and post-decrement operators, written ``--``. Decrement applies to numbers, both decimal and integers. Unlike increment, it does not apply to strings: there is no string decrement, and ``--`` on a non-numeric string leaves it unchanged. Decrement works on null: it always produces null, as decrementing null has no effect.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decrement.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decrement.html","name":"Decrement","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 09 Oct 2026 17:22:16 +0000","dateModified":"Fri, 09 Oct 2026 17:22:16 +0000","description":"Decrement refers to the process of decreasing or subtracting a small amount from a value, or simply one unit","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decrement.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pre-increment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/post-increment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/increment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string-increment.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Increment_and_decrement_operators"},{"@type":"CreativeWork","name":"Incrementing\/Decrementing Operators","url":"https:\/\/www.php.net\/manual\/en\/language.operators.increment.php"},{"@type":"CreativeWork","name":"Arithmetic operators","url":"https:\/\/www.php.net\/manual\/en\/language.operators.arithmetic.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.38","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"decrement"}]}]}</script>
```php
<?php

    $a = 1;

    echo --$a; // pre minus minus : displays 0, and $a ends with 0

    echo $a--; // post minus minus : displays 0, and $a ends with -1

    echo $a -= 1; // decrement : displays -2

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Increment_and_decrement_operators)**
## See Also

+ [Incrementing/Decrementing Operators](https://www.php.net/manual/en/language.operators.increment.php)
+ [Arithmetic operators](https://www.php.net/manual/en/language.operators.arithmetic.php)

## Related

+ [Pre-increment](pre-increment.html)
+ [Post-increment](post-increment.html)
+ [Increment](increment.html)
+ [String Increment](string-increment.html)
