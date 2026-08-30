# Increment
Increment refers to the process of increasing or adding a small amount to a value, or simply one unit.

Increment usually refers to the pre-increment and post-increment operators. Increment applies to numbers, both decimal and integers. It also applies to strings, though the feature has been moved to functions. Increment works on booleans: it always produces 1 first, then, since it was turned into an integer, it goes on with numbers.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/increment.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/increment.html","name":"Increment","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:46:07 +0000","dateModified":"Sun, 16 Aug 2026 07:46:07 +0000","description":"Increment refers to the process of increasing or adding a small amount to a value, or simply one unit","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/increment.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pre-increment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/post-increment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string-increment.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Increment_and_decrement_operators"},{"@type":"CreativeWork","name":"Incrementing\/Decrementing Operators","url":"https:\/\/www.php.net\/manual\/en\/language.operators.increment.php"},{"@type":"CreativeWork","name":"Arithmetic operators","url":"https:\/\/www.php.net\/manual\/en\/language.operators.arithmetic.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"increment"}]}]}</script>
```php
<?php

    $a = 1;
    
    echo ++$a; // pre plus plus : displays 1, and $a ends with 2
    
    echo $a++; // post plus plus 
    
    echo $a += 1; // increment 

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Increment_and_decrement_operators)**
## See Also

+ [Incrementing/Decrementing Operators](https://www.php.net/manual/en/language.operators.increment.php)
+ [Arithmetic operators](https://www.php.net/manual/en/language.operators.arithmetic.php)

## Related

+ [Pre-increment](pre-increment.html)
+ [Post-increment](post-increment.html)
+ [String Increment](string-increment.html)
