# Array, []
``array`` is the array structure. 

It may be written as ``array()`` or with square brackets ``[]``, which is also called the array short syntax.

The keys that serve as index in the array may be string or integers. 

An array assigns automatically an integer index to the values appended to it. An arbitrary index may be assigned with the ``=>`` syntax, or when accessing an element in the array. 

Mixed keys in an array refers to the practice add elements in the array with both the automatic indexing and the arbitrary assignment.
```php
<?php

$array = array(1, 2, 3); 

$anotherArray = ['a' => 2, 'b' => 33];

echo $anotherArray['b']; // 33

?>
```

## See Also

+ [New Array Functions in PHP 8.4](https://ashallendesign.co.uk/blog/php-84-array-functions)
+ [PHP arrays are driving me mad](https://lukasrotermund.de/posts/php-array-object-benchmarking/)
+ [PHP Oddities](https://flowtwo.io/post/php's-oddities)

Related : [Index For Arrays](Index For Arrays), [Addition](Addition), [Comma](Comma), [Dereferencing](Dereferencing), [Cryptographic Hash](Cryptographic Hash), [Hash](Hash), [Hashing](Hashing), [Iterable](Iterable), [List](List), [Map](Map), [Sort](Sort), [Sort](Sort), [Indexed Array](Indexed Array), [Associative Array](Associative Array), [ArrayObject](ArrayObject), [Collection](Collection), [Multiplication](Multiplication), [Recursive Array](Recursive Array), [Square Brackets](Square Brackets), [Array With Curly Braces](Array With Curly Braces), [count()](count()), [Tree](Tree), [Weakmap](Weakmap), [file_put_contents()](file_put_contents()), [iterator_to_array()](iterator_to_array()), [Offset](Offset), [yield from Keyword](yield from Keyword), [array_column](array_column), [Autovivification](Autovivification), [Data Structure](Data Structure), [Pair](Pair), [Pop](Pop), [Compact Array](Compact Array), [Hash Table](Hash Table), [Look-up](Look-up), [Multiple Return Values](Multiple Return Values), [Random Access](Random Access), [Tuple](Tuple), [Value Type](Value Type), [Dot Notation](Dot Notation), [PHP Natives](PHP Natives), [Self-reference](Self-reference), [Serde](Serde), [Bucket](Bucket), [Multidimensional Array](Multidimensional Array), [Nesting](Nesting), [RecursiveArrayIterator](RecursiveArrayIterator), [Sequence](Sequence), [Set](Set), [Swap](Swap)
