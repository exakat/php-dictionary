---
type: "keyword"
title: "yield from Keyword"
description: "The ``yield from`` keyword is used to delegate the iteration control of one generator to another."
resource: "https://www.php.net/manual/en/language.generators.syntax.php#control-structures.yield.from"
tags: ["keyword", "feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# yield from Keyword

The ``yield from`` keyword is used to delegate the iteration control of one generator to another. It was introduced in version 7.0 as part of the generator delegation feature. 

This keyword allows to create more maintainable and modular code by reusing the code logic of one generator within another.

Generator delegation works with another generators, ``Traversable`` objects, and arrays.

```php
<?php

    function inner() {
        yield 1; // key 0
        yield 2; // key 1
        yield 3; // key 2
    }
    function gen() {
        yield 0; // key 0
        yield from inner(); // keys 0-2
        yield 4; // key 1
    }
    // pass false as second parameter to get an array [0, 1, 2, 3, 4]
    var_dump(iterator_to_array(gen()));

?>
```

## Documentation
- [https://www.php.net/manual/en/language.generators.syntax.php#control-structures.yield.from](https://www.php.net/manual/en/language.generators.syntax.php#control-structures.yield.from)

## See Also
- [How to Use Yield and Generators in PHP](https://code.tutsplus.com/tutorials/how-to-use-yield-and-generators-in-php--cms-39200)

## Related
- [Yield](/features/yield.md)
- [Generator](/features/generator.md)
- [Traversable](/features/traversable.md)
- [Array, []](/features/array.md)
- [Jump](/features/jump.md)
- [range()](/features/range.md)
- [Stealth Generator](/features/stealth-generator.md)

## Details
- PHP since: 7.0

