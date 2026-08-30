---
type: "control flow"
title: "foreach()"
description: "``foreach()`` is the most popular type of loop."
resource: "https://www.php.net/manual/en/control-structures.foreach.php"
tags: ["control flow"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# foreach()

``foreach()`` is the most popular type of loop. 

The ``foreach()`` loop uses all the elements of the source, and assign them to blind variables. By default, only the value is assigned; when using the ``$key => $value`` syntax, the key is also assigned. Then the block is executed with the assigned values. 

The source may be an array, or an object with the ``Traversable`` interface: this includes iterators and generators, but also custom classes. Other types are forbidden.

Part of the block execution may be skipped by using the ``continue`` keyword.

The value may be a reference: then it actually references the original value, which then may be modified in the source. Do not forget to unset referenced variables after the loop, to avoid the dangling reference syndrome, when the last value is changed.

The value may be an array, collecting several values at the same time. 

The value may be an ``list()`` construct: it sets several variables at the same time, to be used in the loop block. Any missing value yields a warning. 

``foreach()`` may also be replaced by array functions, such as ``array_map()``, ``implode()`` or ``array_merge()``, for specific operations. It is usually recommended to use native functions, when available.

```php
<?php

    /*
    foreach($source as $key => $value) {
        // block
    }
    */
    
    foreach([11,12,13] as $id => $value) {
        print "$id => $value\n";
        // 0 => 11
        // 1 => 12
        // 2 => 13
    }
    
    //foreach([[21,22], [33, 34]] as list($a, $b)) {
    foreach([[21,22], [33, 34]] as [$a, $b]) {
        print "$a $b\n";
        // 21 22
        // 33 34
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.foreach.php](https://www.php.net/manual/en/control-structures.foreach.php)

## See Also
- [Introduction To The Foreach Loop In PHP (With Code Examples)](https://zerotomastery.io/blog/PHP-foreach-loop-explained/)
- [PHP foreach](https://zetcode.com/php/foreach/)

## Related
- [Continue](/features/continue.md)
- [For](/features/for.md)
- [Loops](/features/loop.md)
- [While](/features/while.md)
- [Do While](/features/do-while.md)
- [As](/features/as.md)
- [Control Flow](/features/control-flow.md)
- [Control Structures](/features/control-structure.md)
- [Iterator](/features/iterator.md)
- [List](/features/list.md)
- [Blind Variable](/features/blind-key.md)
- [ClosedGeneratorException](/features/closedgeneratorexception.md)
- [IteratorAggregate](/features/iteratoraggregate.md)
- [Traversal](/features/traversal.md)

