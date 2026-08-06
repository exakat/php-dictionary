# Array, []
``array`` is the array structure. 

It may be written as ``array()`` or with square brackets ``[]``, which is also called the array short syntax.

The keys that serve as index in the array may be string or integers. 

An array assigns automatically an integer index to the values appended to it. An arbitrary index may be assigned with the ``=>`` syntax, or when accessing an element in the array. 

Mixed keys in an array refers to the practice add elements in the array with both the automatic indexing and the arbitrary assignment.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array.html","name":"Array, []","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:43:29 +0000","dateModified":"Thu, 06 Aug 2026 05:43:29 +0000","description":"``array`` is the array structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Array, [].html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$array = array(1, 2, 3); 

$anotherArray = ['a' => 2, 'b' => 33];

echo $anotherArray['b']; // 33

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.array.php)**
## See Also

+ [New Array Functions in PHP 8.4](https://ashallendesign.co.uk/blog/php-84-array-functions)
+ [PHP arrays are driving me mad](https://lukasrotermund.de/posts/php-array-object-benchmarking/)
+ [PHP Oddities](https://flowtwo.io/post/php's-oddities)

## Related

+ [Index For Arrays](index-array.ini.html)
+ [Addition](addition.ini.html)
+ [Comma](comma.ini.html)
+ [Dereferencing](dereferencing.ini.html)
+ [Cryptographic Hash](hash-crypto.ini.html)
+ [Hash](hash.ini.html)
+ [Hashing](hashing.ini.html)
+ [Iterable](iterable.ini.html)
+ [List](list.ini.html)
+ [Map](map.ini.html)
+ [Sort](sort.ini.html)
+ [Sort](sorting.ini.html)
+ [Indexed Array](indexed-array.ini.html)
+ [Associative Array](associative-array.ini.html)
+ [ArrayObject](arrayobject.ini.html)
+ [Collection](collection.ini.html)
+ [Multiplication](multiplication.ini.html)
+ [Recursive Array](recursive-array.ini.html)
+ [Square Brackets](square-bracket.ini.html)
+ [Array With Curly Braces](array-curly-braces.ini.html)
+ [count()](count.ini.html)
+ [Tree](tree.ini.html)
+ [Weakmap](weakmap.ini.html)
+ [file\_put\_contents()](file_put_contents.ini.html)
+ [iterator\_to\_array()](iterator_to_array.ini.html)
+ [Offset](offset.ini.html)
+ [yield from Keyword](yield-from.ini.html)
+ [array\_column](array_column.ini.html)
+ [Autovivification](autovivification.ini.html)
+ [Data Structure](datastructure.ini.html)
+ [Pair](pair.ini.html)
+ [Pop](pop.ini.html)
+ [Compact Array](compact-array.ini.html)
+ [Hash Table](hash-table.ini.html)
+ [Look-up](look-up.ini.html)
+ [Multiple Return Values](multiple-return-value.ini.html)
+ [Random Access](random-access.ini.html)
+ [Tuple](tuple.ini.html)
+ [Value Type](value-type.ini.html)
+ [Dot Notation](dot-notation.ini.html)
+ [PHP Natives](native-type.ini.html)
+ [Self-reference](self-reference.ini.html)
+ [Serde](serde.ini.html)
+ [Bucket](bucket.ini.html)
+ [Multidimensional Array](multidimensional-array.ini.html)
+ [Nesting](nesting.ini.html)
+ [RecursiveArrayIterator](recursivearrayiterator.ini.html)
+ [Sequence](sequence.ini.html)
+ [Set](set.ini.html)
+ [Swap](swap.ini.html)
+ [array\_filter()](array_filter.ini.html)
+ [array\_key\_first()](array_key_first.ini.html)
+ [Destructuring](destructuring.ini.html)
+ [is\_array()](is_array.ini.html)

## Related packages

+ [voku/arrayy](https://packagist.org/packages/voku/arrayy)
