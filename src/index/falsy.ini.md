# Falsy
A falsy value is a value that evaluate to false, when cast to a boolean. It includes false, obviously, but also other values such as 0, ``''``, the empty string, or ``[]``, the empty array.

The contrary to falsy is truthy. 

There are some falsy values which are difficult to guess, as is illustrated below.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/falsy.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/falsy.ini.html","name":"Falsy","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:16 +0000","dateModified":"Fri, 19 Jun 2026 21:25:16 +0000","description":"A falsy value is a value that evaluate to false, when cast to a boolean","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Falsy.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Truthy](truthy.ini.html)
+ [False](false.ini.html)
+ [Boolean](boolean.ini.html)
+ [Empty String](empty-string.ini.html)
