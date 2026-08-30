---
type: "PHP Feature"
title: "extract()"
description: "``extract()`` is a native PHP function, which creates arrays from an array containing variables and their values."
resource: "https://www.php.net/manual/en/function.extract.php"
tags: ["native function", "feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# extract()

``extract()`` is a native PHP function, which creates arrays from an array containing variables and their values.

``extract()`` has option to handle situations where the variables are already existing, and how those conflicts should be handled: by default, it overwrites the local variables.

Options are:  ``EXTR_OVERWRITE``, ``EXTR_SKIP``, ``EXTR_PREFIX_SAME``, ``EXTR_PREFIX_ALL``, ``EXTR_PREFIX_INVALID``, ``EXTR_IF_EXISTS``, ``EXTR_PREFIX_IF_EXISTS``, ``EXTR_REFS``.

This function is the opposite of ``compact()``.

```php
<?php

    $a = 0; // $a is getting overwritten
    $array = extract(['a' => 1, 'b' => 2]);
    
    echo $a + $b; // 2

?>
```

## Documentation
- [https://www.php.net/manual/en/function.extract.php](https://www.php.net/manual/en/function.extract.php)

## See Also
- [compact](https://www.php.net/manual/en/function.compact.php)
- [Variable variables](https://www.php.net/manual/en/language.variables.variable.php)

## Related
- [compact()](/features/compact.md)
- [Variable Variables](/features/variable-variable.md)
- [Local Variable](/features/local-variable.md)

