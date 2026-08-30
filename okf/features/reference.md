---
type: "PHP Feature"
title: "References"
description: "References allow creating multiple variables that refer to the same underlying value in memory."
resource: "https://www.php.net/manual/en/language.references.php"
tags: ["parameter", "alias"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# References

References allow creating multiple variables that refer to the same underlying value in memory. When using references, any changes made by one variable affect the others that reference the same value. This may be useful in certain situations, such as when it is important to avoid copying large amounts of data or when it is needed to modify the original value through multiple variables. PHP optimizes the transfer of data by postponing duplication of data until they are actually modified: there is no need to use references with readonly data.

```php
<?php

    $a = 1;

    $b = &$a; 
    $b = 2;

    echo $a;
    // displays 2

?>
```

## Documentation
- [https://www.php.net/manual/en/language.references.php](https://www.php.net/manual/en/language.references.php)

## See Also
- [PHP References: How They Work, and When to Use Them](https://www.elated.com/php-references/)
- [PHP Spotting References](https://www.tutorialspoint.com/php-spotting-references)
- [References in PHP](https://erikpoehler.com/2023/01/15/references-in-php/)

## Related
- [Variables](/features/variable.md)
- [Weak References](/features/weak-reference.md)
- [Alias](/features/alias.md)
- [Dangling Reference](/features/dangling-reference.md)
- [Garbage Collection](/features/garbage-collection.md)
- [Recursive Array](/features/recursive-array.md)
- [Self-reference](/features/self-reference.md)
- [Circular Reference](/features/circular-reference.md)
- [Clone](/features/clone.md)
- [Pointer](/features/pointer.md)
- [array_fill()](/features/array_fill.md)
- [Assignment](/features/assignment.md)
- [Footgun](/features/footgun.md)
- [Linear Type](/features/linear-type.md)

