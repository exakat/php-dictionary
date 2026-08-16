# Array, []
``array`` is the array structure. 

It may be written as ``array()`` or with square brackets ``[]``, which is also called the array short syntax.

The keys that serve as index in the array may be string or integers. 

An array assigns automatically an integer index to the values appended to it. An arbitrary index may be assigned with the ``=>`` syntax, or when accessing an element in the array. 

Mixed keys in an array refer to the practice of adding elements in the array with both the automatic indexing and the arbitrary assignment.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array.html","name":"Array, []","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:52:39 +0000","dateModified":"Tue, 11 Aug 2026 20:52:39 +0000","description":"array is the array structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Array, [].html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array"}]}]}</script>
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

+ [Index For Arrays](index-array.html)
+ [Addition](addition.html)
+ [Comma](comma.html)
+ [Dereferencing](dereferencing.html)
+ [Cryptographic Hash](hash-crypto.html)
+ [Hash](hash.html)
+ [Hashing](hashing.html)
+ [Iterable](iterable.html)
+ [List](list.html)
+ [Map](map.html)
+ [Sort](sort.html)
+ [Sort](sorting.html)
+ [Indexed Array](indexed-array.html)
+ [Associative Array](associative-array.html)
+ [ArrayObject](arrayobject.html)
+ [Collection](collection.html)
+ [Multiplication](multiplication.html)
+ [Recursive Array](recursive-array.html)
+ [Square Brackets](square-bracket.html)
+ [Array With Curly Braces](array-curly-braces.html)
+ [count()](count.html)
+ [Tree](tree.html)
+ [Weakmap](weakmap.html)
+ [file\_put\_contents()](file_put_contents.html)
+ [iterator\_to\_array()](iterator_to_array.html)
+ [Offset](offset.html)
+ [yield from Keyword](yield-from.html)
+ [array\_column](array_column.html)
+ [Autovivification](autovivification.html)
+ [Data Structure](datastructure.html)
+ [Pair](pair.html)
+ [Pop](pop.html)
+ [Compact Array](compact-array.html)
+ [Hash Table](hash-table.html)
+ [Look-up](look-up.html)
+ [Multiple Return Values](multiple-return-value.html)
+ [Random Access](random-access.html)
+ [Tuple](tuple.html)
+ [Value Type](value-type.html)
+ [Dot Notation](dot-notation.html)
+ [PHP Natives](native-type.html)
+ [Self-reference](self-reference.html)
+ [Serde](serde.html)
+ [Bucket](bucket.html)
+ [Multidimensional Array](multidimensional-array.html)
+ [Nesting](nesting.html)
+ [RecursiveArrayIterator](recursivearrayiterator.html)
+ [Sequence](sequence.html)
+ [Set](set.html)
+ [Swap](swap.html)
+ [array\_filter()](array_filter.html)
+ [array\_key\_first()](array_key_first.html)
+ [Destructuring](destructuring.html)
+ [is\_array()](is_array.html)

## Related packages

+ [voku/arrayy](https://packagist.org/packages/voku/arrayy)
