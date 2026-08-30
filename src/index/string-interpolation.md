# String Interpolation
String interpolation is a feature where variables inside a string are dynamically replaced by their value at execution time. 

There are several ways to do interpolation: 

+ Use double-quotes and a variable
+ Use double-quotes and a property or an array with a valid index
+ Use curly braces with a variable
+ Use dollar and curly-braces: it calls the variable whose name is dynamically calculated in the curly braces. This syntax is deprecated in version 8.2 and later.

Double quotes and Heredoc notation allow string interpolation. On the other hand, single quotes and nowdoc forbid interpolation. Then, escaping the special characters such as ``$`` and ``{`` with ``\\\\`` also disables interpolation locally.

Interpolation happens inside strings, while concatenation happens between strings.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string-interpolation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string-interpolation.html","name":"String Interpolation","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:40:32 +0000","dateModified":"Tue, 11 Aug 2026 14:40:32 +0000","description":"String interpolation is a feature where variables inside a string are dynamically replaced by their value at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string-interpolation.html"]}],"keywords":["string","syntax"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.string.php#language.types.string.syntax.double"},{"@type":"CreativeWork","name":"PHP String Interpolation in 2026: Examples, Curly Braces, Heredoc, and PHP 8.2 Notes","url":"https:\/\/phppot.com\/php\/variable-interpolation-in-php\/"},{"@type":"CreativeWork","name":"PHP 8.2:  string interpolation deprecated","url":"https:\/\/php.watch\/versions\/8.2\/$%7Bvar%7D-string-interpolation-deprecated"},{"@type":"CreativeWork","name":"PHP String Interpolation - Complete Tutorial with Examples","url":"https:\/\/zetcode.com\/php\/string-interpolation\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"string-interpolation"}]}]}</script>
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

+ [String](string.html)
