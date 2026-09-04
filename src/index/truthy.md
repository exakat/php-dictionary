# Truthy
A truthy value is a value that evaluate to true, when cast to a boolean. It includes true, obviously, but also other values such as ``1``, ``-1``, ``'0'``, strings, except the empty string and ``'0``, non-empty arrays and all the objects.

The contrary to truthy is falsy. 

There are some values which are difficult to guess, as is illustrated below.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/truthy.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/truthy.html","name":"Truthy","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:45 +0000","dateModified":"Fri, 19 Jun 2026 21:24:45 +0000","description":"A truthy value is a value that evaluate to true, when cast to a boolean","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/truthy.html"]}],"keywords":["concept","boolean"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/false.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/falsy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/true.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/boolean.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/one.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/minus-one.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zero.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.boolean.php"},{"@type":"CreativeWork","name":"The Differences in Truthiness and Falsiness in JavaScript vs PHP","url":"https:\/\/dev.to\/kengitahi\/the-differences-in-truthiness-and-falsiness-in-javascript-vs-php-4fdb"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"truthy"}]}]}</script>
```php
<?php

var_dump((bool) 1);       // true
var_dump((bool) -1);      // true
var_dump((bool) '0');     // false
var_dump((bool) '00');    // true
var_dump((bool) []);      // false
var_dump((bool) [null]);  // true
var_dump((bool) new stdclass);    // true

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.boolean.php)**
## See Also

+ [The Differences in Truthiness and Falsiness in JavaScript vs PHP](https://dev.to/kengitahi/the-differences-in-truthiness-and-falsiness-in-javascript-vs-php-4fdb)

## Related

+ [False](false.html)
+ [Falsy](falsy.html)
+ [True](true.html)
+ [Boolean](boolean.html)
+ [Comparison](comparison.html)
+ [one](one.html)
+ [Minus One -1](minus-one.html)
+ [zero](zero.html)
