# Square Brackets
Square brackets ``[`` and ``]`` are used with the array syntax: they delimit the offset in the index.

Square brackets are also used to define array: this is the short syntax array, where ``[1,2,3]`` is equivalent to ``array(1,2,3)``.

Square brackets are also used to embody the ``list()`` command: this is the short syntax array, where ``[$a, $b, $c]`` is equivalent to ``list($a,$b,$c)``. The ``list()`` and ``array()`` syntaxes are distinguished between one another as ``list()`` must be in a writing context, such as the left side of an assignation or the values of a foreach, while the ``array()`` must be in a reading context, such as the right side of an assignation, or parameter passing.

Finally, an empty square bracket is the append operator.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/square-bracket.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/square-bracket.html","name":"Square Brackets","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 12:17:01 +0000","dateModified":"Tue, 25 Aug 2026 12:17:01 +0000","description":"Square brackets [ and ] are used with the array syntax: they delimit the offset in the index","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/square-bracket.html"]}],"alternateName":["square-brace"],"keywords":["token","delimiter","character"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index-array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/list.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/append.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/curly-bracket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parenthesis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bracketless.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fnmatch.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.array.php"},{"@type":"CreativeWork","name":"PHP RFC: Short List Syntax","url":"https:\/\/wiki.php.net\/rfc\/short_list_syntax"},{"@type":"CreativeWork","name":"PHP: list()","url":"https:\/\/www.php.net\/manual\/en\/function.list.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"square-bracket"}]}]}</script>
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
## See Also

+ [PHP RFC: Short List Syntax](https://wiki.php.net/rfc/short_list_syntax)
+ [PHP: list()](https://www.php.net/manual/en/function.list.php)

## Related

+ [Array, []](array.html)
+ [Index For Arrays](index-array.html)
+ [List](list.html)
+ [Array Append](append.html)
+ [Curly Brackets](curly-bracket.html)
+ [Parenthesis](parenthesis.html)
+ [Bracketless](bracketless.html)
+ [fnmatch()](fnmatch.html)
