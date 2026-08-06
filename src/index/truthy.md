# Truthy
A truthy value is a value that evaluate to true, when cast to a boolean. It includes true, obviously, but also other values such as ``1``, ``-1``, ``'0'``, strings, except the empty string and ``'0``, non-empty arrays and all the objects.

The contrary to truthy is falsy. 

There are some values which are difficult to guess, as is illustrated below.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/truthy.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/truthy.html","name":"Truthy","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:45 +0000","dateModified":"Fri, 19 Jun 2026 21:24:45 +0000","description":"A truthy value is a value that evaluate to true, when cast to a boolean","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Truthy.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [False](false.ini.html)
+ [Falsy](falsy.ini.html)
+ [True](true.ini.html)
+ [Boolean](boolean.ini.html)
+ [Comparison](comparison.ini.html)
+ [one](one.ini.html)
+ [Minus One -1](minus-one.ini.html)
+ [zero](zero.ini.html)
