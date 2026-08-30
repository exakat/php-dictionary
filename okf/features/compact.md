---
type: "PHP Feature"
title: "compact()"
description: "``compact()`` is a native PHP function, which creates an array containing variables and their values, from a list of variable names."
resource: "https://www.php.net/manual/en/function.compact.php"
tags: ["native", "native function", "arbitrary number of argument"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# compact()

``compact()`` is a native PHP function, which creates an array containing variables and their values, from a list of variable names.

It is the opposite of ``extract()``.

```php
<?php

    $a = '1';
    $b = '2';
    
    $array = compact('a', 'b');
    // ['a' => 1, 'b' => 2];

?>
```

## Documentation
- [https://www.php.net/manual/en/function.compact.php](https://www.php.net/manual/en/function.compact.php)

## See Also
- [``compact()`` function in PHP, and why it is problematic due to its magic behavior](https://gist.github.com/Ocramius/c56a8e8ff25a8e0bd96800c41edab02a)

## Related
- [extract()](/features/extract.md)
- [Variable Variables](/features/variable-variable.md)
- [Compact Array](/features/compact-array.md)
- [Stubs Files](/features/stubs.md)

