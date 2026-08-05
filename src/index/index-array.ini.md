# Index For Arrays
A index is the identifier of an specific element in an array. They may automatically generated, by simply omitting them at creation time. 

PHP index may be integers or strings only. Other data types generate an error or a type conversion. For example, floats are turned into integer. integer-shaped strings will also be turned into integer.

PHP index start at 0. They may be automatically assigned by appending a new value with the ``[]`` operator: then, they use the greatest available index + 1.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/index-array.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/index-array.ini.html","name":"Index For Arrays","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A index is the identifier of an specific element in an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Index For Arrays.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Array, []](array.ini.html)
+ [Data Container](data-container.ini.html)
+ [Collection](collection.ini.html)
+ [Index](index.ini.html)
+ [Map](map.ini.html)
+ [negative-index](negative-index.ini.html)
+ [Square Brackets](square-bracket.ini.html)
+ [Array Element](array-element.ini.html)
+ [array\_keys()](array_keys.ini.html)
+ [Automatic Index](automatic-index.ini.html)
+ [unset()](unset.ini.html)
+ [Array Dot Notation](array-dot-notation.ini.html)
+ [array\_column](array_column.ini.html)
+ [array\_push()](array_push.ini.html)
+ [Offset](offset.ini.html)
+ [Multidimensional Array](multidimensional-array.ini.html)
