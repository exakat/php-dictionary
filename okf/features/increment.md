---
type: "concept"
title: "Increment"
description: "Increment refers to the process of increasing or adding a small amount to a value, or simply one unit."
resource: "https://en.wikipedia.org/wiki/Increment_and_decrement_operators"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Increment

Increment refers to the process of increasing or adding a small amount to a value, or simply one unit.

Increment usually refers to the pre-increment and post-increment operators. Increment applies to numbers, both decimal and integers. It also applies to strings, though the feature has been moved to functions. Increment works on booleans: it always produces 1 first, then, since it was turned into an integer, it goes on with numbers.

```php
<?php

    $a = 1;
    
    echo ++$a; // pre plus plus : displays 1, and $a ends with 2
    
    echo $a++; // post plus plus 
    
    echo $a += 1; // increment 

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Increment_and_decrement_operators](https://en.wikipedia.org/wiki/Increment_and_decrement_operators)

## See Also
- [Incrementing/Decrementing Operators](https://www.php.net/manual/en/language.operators.increment.php)
- [Arithmetic operators](https://www.php.net/manual/en/language.operators.arithmetic.php)

## Related
- [Pre-increment](/features/pre-increment.md)
- [Post-increment](/features/post-increment.md)
- [String Increment](/features/string-increment.md)

