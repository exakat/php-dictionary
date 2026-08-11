# Automatic Index
Automatic index is the index that PHP assign to a value, when it is added to an array, without specifying the index. 

By default, the indices start at 0, and are incremented one by one, each time it is needed. It is not incremented when it is not needed. 

The automatic index is needed at the definition of the array, or when using the array append operator ``[]``.

PHP uses the largest integer index that was used in the array, and increment it. That way, no overwrite of the index appears.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/automatic-index.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/automatic-index.html","name":"Automatic Index","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Automatic index is the index that PHP assign to a value, when it is added to an array, without specifying the index","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Automatic Index.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"automatic-index"}]}]}</script>
```php
<?php

$array = ['a', 'b', 'c'];
// [0 => 'a', 1 => 'b', 2 => 'c']

$array[] = 'd';
// [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd']

$array['e'] = 'f';
// [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd', 'e' => 'f']

$array[] = 'g';
// [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd', 'e' => 'f', 4 => 'g']

$array[11] = 'h';
// [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd', 'e' => 'f', 4 => 'g', 11 => 'h']

$array[] = 'i';
// [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd', 'e' => 'f', 4 => 'g']
// [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd', 'e' => 'f', 4 => 'g', 11 => 'h', 12 => 'i']

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.array.php)**
## Related

+ [Index For Arrays](index-array.html)
+ [Hash](hash.html)
