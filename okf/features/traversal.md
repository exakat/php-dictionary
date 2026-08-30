---
type: "concept"
title: "Traversal"
description: "A traversal is the process of listing all elements in a data structure."
resource: "https://en.wikipedia.org/wiki/Graph_traversal"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Traversal

A traversal is the process of listing all elements in a data structure. 

``foreach()`` is a command to do a traversal on an array, an object or an iterable object. It is also possible to use an iterator.

Traversal may be recursive: for example, the recursive iterators in the SPL library feature the ``RecursiveArrayIterator`` class, which traverses multi-dimensional arrays.

Traversal of a tree or graph data structure turns the graph into an array-like list.

```php
<?php

    $array = range(0, 9);
    
    foreach($array as $item) {
        print "$item\n";
        // list digits from 0 to 9
    }
    
    // adds 10, 11, 12 to the previous array
    // in a separate 
    $array[] = [10, 11, 12];
    
    $iterator = new RecursiveArrayIterator($array);
    foreach($iterator as $item) {
        print "$item\n";
        // list digits from 0 to 12
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Graph_traversal](https://en.wikipedia.org/wiki/Graph_traversal)

## See Also
- [Using PHP Arrays: A Guide for Beginners](https://www.sitepoint.com/php-arrays-tutorial/)

## Related
- [Iterator](/features/iterator.md)
- [foreach()](/features/foreach.md)
- [Loops](/features/loop.md)

