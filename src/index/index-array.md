# Index For Arrays
A index is the identifier of an specific element in an array. They may automatically generated, by simply omitting them at creation time. 

PHP index may be integers or strings only. Other data types generate an error or a type conversion. For example, floats are turned into integer. integer-shaped strings will also be turned into integer.

PHP index start at 0. They may be automatically assigned by appending a new value with the ``[]`` operator: then, they use the greatest available index + 1.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index-array.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index-array.html","name":"Index For Arrays","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A index is the identifier of an specific element in an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Index For Arrays.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"index-array"}]}]}</script>
```php
<?php

    $array = ['a', 'b', 'c'];

    echo $array[0];

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.array.php)**
## See Also

+ [PHP: Frankenstein arrays](https://vazaha.blog/en/9/php-frankenstein-arrays)
+ [Filtering an array by keys in PHP](https://yellowduck.be/posts/filtering-an-array-by-keys-in-php)

## Related

+ [Array, []](array.html)
+ [Data Container](data-container.html)
+ [Collection](collection.html)
+ [Index](index.html)
+ [Map](map.html)
+ [Negative Index](negative-index.html)
+ [Square Brackets](square-bracket.html)
+ [Array Element](array-element.html)
+ [array\_keys()](array_keys.html)
+ [Automatic Index](automatic-index.html)
+ [unset()](unset.html)
+ [Array Dot Notation](array-dot-notation.html)
+ [array\_column](array_column.html)
+ [array\_push()](array_push.html)
+ [Offset](offset.html)
+ [Multidimensional Array](multidimensional-array.html)
