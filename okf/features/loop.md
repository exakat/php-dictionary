---
type: "concept"
title: "Loops"
description: "A loop is a control structure that allows to execute a block of code repeatedly based on a specified condition."
resource: "https://www.php.net/manual/en/language.control-structures.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Loops

A loop is a control structure that allows to execute a block of code repeatedly based on a specified condition. Loops are essential for automating repetitive tasks and processing arrays or collections of data. PHP provides several types of loops, including: for, while, do...while and foreach.

The most popular loop is ``foreach()``.

Loops may hide in certain functions: for example, ``array_map()`` and ``array_walk()`` apply a method to every element in an array. 

Generators are closely related to the ``foreach()`` loop.

```php
<?php

    foreach([11,12,13] as $id => $value) {
        print "$id => $value\n";
    }
    
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
    }
    
    $i = 10;
    while ($i <= 10) {
        echo $i++;  
    }
    
    $i = 10;
    do {
        echo $i++;  
    } while ($i <= 10);

?>
```

## Documentation
- [https://www.php.net/manual/en/language.control-structures.php](https://www.php.net/manual/en/language.control-structures.php)

## See Also
- [PHP Loops: Concepts, Syntax, and Use Cases](https://intellipaat.com/blog/php-loops/)

## Related
- [Do While](/features/do-while.md)
- [While](/features/while.md)
- [Break](/features/break.md)
- [Control Flow](/features/control-flow.md)
- [Dangling Reference](/features/dangling-reference.md)
- [For](/features/for.md)
- [foreach()](/features/foreach.md)
- [N+1 Query Problem](/features/n-query.md)
- [Array Element](/features/array-element.md)
- [InfiniteIterator](/features/infiniteiterator.md)
- [Nesting](/features/nesting.md)
- [Traversal](/features/traversal.md)

