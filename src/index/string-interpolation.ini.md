# String Interpolation
String interpolation is a feature where variables inside a string are dynamically replaced by their value at execution time. 

There are several ways to do interpolation: 

+ Use double-quotes and a variable
+ Use double-quotes and a property or a array with a valid index
+ Use curly braces with a variable
+ Use dollar and curly-braces: it calls the variable whose name is dynamically calculated in the curly braces. This syntax is deprecated in version 8.2 and later.

Double quotes and Heredoc notation allows string interpolation. On the other hand, single quote and nowdoc forbid interpolation. Then, escaping the special characters such as ``$`` and ``{`` with ``\\\\`` also disables interpolation locally.

Interpolation happens inside strings, while concatenation happens between strings.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/string-interpolation.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/string-interpolation.ini.html","name":"String Interpolation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:20:10 +0000","dateModified":"Mon, 06 Jul 2026 10:20:10 +0000","description":"String interpolation is a feature where variables inside a string are dynamically replaced by their value at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/String Interpolation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$world = 'world';
// This is an interpolated string
$string = "Hello $world";

// This is not an interpolated string
$string = 'Hollow $world';

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double)**
## See Also

+ [PHP String Interpolation in 2026: Examples, Curly Braces, Heredoc, and PHP 8.2 Notes](https://phppot.com/php/variable-interpolation-in-php/)
+ [PHP 8.2:  string interpolation deprecated](https://php.watch/versions/8.2/$%7Bvar%7D-string-interpolation-deprecated)
+ [PHP String Interpolation - Complete Tutorial with Examples](https://zetcode.com/php/string-interpolation/)

## Related

+ [String](string.ini.html)
