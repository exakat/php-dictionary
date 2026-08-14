# Falsy
A falsy value is a value that evaluates to false, when cast to a boolean. It includes false, obviously, but also other values such as 0, ``''``, the empty string, or ``[]``, the empty array.

The contrary to falsy is truthy. 

There are some falsy values which are difficult to guess, as is illustrated below.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/falsy.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/falsy.html","name":"Falsy","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:53:18 +0000","dateModified":"Tue, 11 Aug 2026 20:53:18 +0000","description":"A falsy value is a value that evaluates to false, when cast to a boolean","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Falsy.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"falsy"}]}]}</script>
```php
<?php

var_dump((bool) 0);       // false
var_dump((bool) '');      // false
var_dump((bool) '0');     // false
var_dump((bool) '00');    // true
var_dump((bool) []);      // false
var_dump((bool) [null]);  // true
var_dump((bool) null);    // false

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.boolean.php)**
## See Also

+ [Truthy and Falsy in PHP](https://www.thisprogrammingthing.com/2021/Truthy-and-Falsy/)
+ [PHP Tricky True False Examples](https://medium.com/@waqar-ahmed/php-tricky-true-false-examples-6d94c1db59a2)

## Related

+ [Truthy](truthy.html)
+ [False](false.html)
+ [Boolean](boolean.html)
+ [Empty String](empty-string.html)
