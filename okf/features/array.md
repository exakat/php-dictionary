---
type: "language construct"
title: "Array, []"
description: "``array`` is the array structure."
resource: "https://www.php.net/manual/en/language.types.array.php"
tags: ["language construct", "keyword", "array"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Array, []

``array`` is the array structure. 

It may be written as ``array()`` or with square brackets ``[]``, which is also called the array short syntax.

The keys that serve as index in the array may be string or integers. 

An array assigns automatically an integer index to the values appended to it. An arbitrary index may be assigned with the ``=>`` syntax, or when accessing an element in the array. 

Mixed keys in an array refer to the practice of adding elements in the array with both the automatic indexing and the arbitrary assignment.

```php
<?php

$array = array(1, 2, 3); 

$anotherArray = ['a' => 2, 'b' => 33];

echo $anotherArray['b']; // 33

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.array.php](https://www.php.net/manual/en/language.types.array.php)

## See Also
- [New Array Functions in PHP 8.4](https://ashallendesign.co.uk/blog/php-84-array-functions)
- [PHP arrays are driving me mad](https://lukasrotermund.de/posts/php-array-object-benchmarking/)
- [PHP Oddities](https://flowtwo.io/post/php's-oddities)
- [Arrays](https://phplang.org/spec/12-arrays.html)

## Related
- [Index For Arrays](/features/index-array.md)
- [Addition](/features/addition.md)
- [Comma](/features/comma.md)
- [Dereferencing](/features/dereferencing.md)
- [Cryptographic Hash](/features/hash-crypto.md)
- [Hash](/features/hash.md)
- [Hashing](/features/hashing.md)
- [Iterable](/features/iterable.md)
- [List](/features/list.md)
- [Map](/features/map.md)
- [Sort](/features/sort.md)
- [Indexed Array](/features/indexed-array.md)
- [Associative Array](/features/associative-array.md)
- [ArrayObject](/features/arrayobject.md)
- [Collection](/features/collection.md)
- [Multiplication](/features/multiplication.md)
- [Recursive Array](/features/recursive-array.md)
- [Square Brackets](/features/square-bracket.md)
- [Array With Curly Braces](/features/array-curly-braces.md)
- [count()](/features/count.md)
- [Tree](/features/tree.md)
- [Weakmap](/features/weakmap.md)
- [file_put_contents()](/features/file_put_contents.md)
- [iterator_to_array()](/features/iterator_to_array.md)
- [Offset](/features/offset.md)
- [yield from Keyword](/features/yield-from.md)
- [array_column](/features/array_column.md)
- [Autovivification](/features/autovivification.md)
- [Data Structure](/features/datastructure.md)
- [Pair](/features/pair.md)
- [Pop](/features/pop.md)
- [Compact Array](/features/compact-array.md)
- [Hash Table](/features/hash-table.md)
- [Look-up](/features/look-up.md)
- [Multiple Return Values](/features/multiple-return-value.md)
- [Random Access](/features/random-access.md)
- [Tuple](/features/tuple.md)
- [Value Type](/features/value-type.md)
- [Dot Notation](/features/dot-notation.md)
- [PHP Natives](/features/native-type.md)
- [Self-reference](/features/self-reference.md)
- [Serde](/features/serde.md)
- [Bucket](/features/bucket.md)
- [Multidimensional Array](/features/multidimensional-array.md)
- [Nesting](/features/nesting.md)
- [RecursiveArrayIterator](/features/recursivearrayiterator.md)
- [Sequence](/features/sequence.md)
- [Set](/features/set.md)
- [Swap](/features/swap.md)
- [array_filter()](/features/array_filter.md)
- [array_key_first()](/features/array_key_first.md)
- [Destructuring](/features/destructuring.md)
- [is_array()](/features/is_array.md)

## Details
- Packagist: [voku/arrayy](https://packagist.org/packages/voku/arrayy)

