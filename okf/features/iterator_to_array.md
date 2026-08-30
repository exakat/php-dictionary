---
type: "PHP Feature"
title: "iterator_to_array()"
description: "``iterator_to_array()`` converts Iterators and Generators into an array."
resource: "https://www.php.net/manual/en/function.iterator-to-array.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# iterator_to_array()

``iterator_to_array()`` converts Iterators and Generators into an array. The iterator is entirely run, and each yielded value is stored in the resulting array.

While iterators play a similar role to arrays, they are not typed the same way. Sometimes, it might be necessary to pass an array rather than the iterator to a method. 

``iterator_to_array()`` may use a lot of memory: iterators often save memory by emitting values one by one, instead of creating them before running some more code. Here, ``iterator_to_array()`` runs the iterator and creates the values before the next step.

``iterator_to_array()`` attempts to run infinite generators, until PHP runs out of memory.

```php
<?php

    function foo(): Generator {
        yield 1;
        yield 2;
        yield 3;
    }
    
    print_r(iterator_to_array(foo()));

?>
```

## Documentation
- [https://www.php.net/manual/en/function.iterator-to-array.php](https://www.php.net/manual/en/function.iterator-to-array.php)

## See Also
- [Iterator (Wikipedia)](https://en.wikipedia.org/wiki/Iterator)
- [Generator overview](https://www.php.net/manual/en/language.generators.overview.php)

## Related
- [Iterator](/features/iterator.md)
- [Array, []](/features/array.md)
- [Generator](/features/generator.md)
- [Yield](/features/yield.md)
- [ArrayObject](/features/arrayobject.md)

