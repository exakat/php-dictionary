# Square Brackets
Square brackets ``[`` and ``]`` are used with the array syntax: they delimit the offset in the index.

Square brackets are also used to define array: this is the short syntax array, where ``[1,2,3]`` is equivalent to ``array(1,2,3)``.

Square brackets are also used to embody the ``list()`` command: this is the short syntax array, where ``[$a, $b, $c]`` is equivalent to ``list($a,$b,$c)``. The ``list()`` and ``array()`` syntaxes are distinguished between one another as ``list()`` must be in a writing context, such as the left side of an assignation or the values of a foreach, while the ``array()`` must be in a reading context, such as the right side of an assignation, or parameter passing.

Finally, an empty square bracket is the append operator.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/square-bracket.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/square-bracket.html","name":"Square Brackets","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:23:55 +0000","dateModified":"Fri, 19 Jun 2026 21:23:55 +0000","description":"Square brackets [ and ] are used with the array syntax: they delimit the offset in the index","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Square Brackets.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"square-bracket"}]}]}</script>
```php
<?php

//Definition of arrays
$array = [1, 2, 3];

// Accessing element in the array
print $array[2]; // 3 

// equivalent to list
[$a, $b] = $array; 

$array[] = 4;
// $array == [1, 2, 3, 4];

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.array.php)**
## Related

+ [Array, []](array.html)
+ [Index For Arrays](index-array.html)
+ [List](list.html)
+ [Array Append](append.html)
+ [Curly Brackets](curly-bracket.html)
+ [Parenthesis](parenthesis.html)
+ [Bracketless](bracketless.html)
+ [fnmatch()](fnmatch.html)
