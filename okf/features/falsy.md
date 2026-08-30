---
type: "PHP Feature"
title: "Falsy"
description: "A falsy value is a value that evaluates to false, when cast to a boolean."
resource: "https://www.php.net/manual/en/language.types.boolean.php"
tags: ["comparison", "neologism"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Falsy

A falsy value is a value that evaluates to false, when cast to a boolean. It includes false, obviously, but also other values such as 0, ``''``, the empty string, or ``[]``, the empty array.

The contrary of falsy is truthy.

There are some falsy values which are difficult to guess, as is illustrated below.

```php
<?php

var_dump((bool) 0);       // false
var_dump((bool) '');      // false
var_dump((bool) '0');     // false
var_dump((bool) '00');    // true
var_dump((bool) []);      // false
var_dump((bool) [null]);  // true
var_dump((bool) null);    // false

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.boolean.php](https://www.php.net/manual/en/language.types.boolean.php)

## See Also
- [Truthy and Falsy in PHP](https://www.thisprogrammingthing.com/2021/Truthy-and-Falsy/)
- [PHP Tricky True False Examples](https://medium.com/@waqar-ahmed/php-tricky-true-false-examples-6d94c1db59a2)

## Related
- [Truthy](/features/truthy.md)
- [False](/features/false.md)
- [Boolean](/features/boolean.md)
- [Empty String](/features/empty-string.md)

