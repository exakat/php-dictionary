---
type: "concept"
title: "Truthy"
description: "A truthy value is a value that evaluate to true, when cast to a boolean."
resource: "https://www.php.net/manual/en/language.types.boolean.php"
tags: ["concept", "boolean"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Truthy

A truthy value is a value that evaluate to true, when cast to a boolean. It includes true, obviously, but also other values such as ``1``, ``-1``, ``'0'``, strings, except the empty string and ``'0``, non-empty arrays and all the objects.

The contrary to truthy is falsy. 

There are some values which are difficult to guess, as is illustrated below.

```php
<?php

var_dump((bool) 1);       // true
var_dump((bool) -1);      // true
var_dump((bool) '0');     // false
var_dump((bool) '00');    // true
var_dump((bool) []);      // false
var_dump((bool) [null]);  // true
var_dump((bool) new stdclass);    // true

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.boolean.php](https://www.php.net/manual/en/language.types.boolean.php)

## See Also
- [The Differences in Truthiness and Falsiness in JavaScript vs PHP](https://dev.to/kengitahi/the-differences-in-truthiness-and-falsiness-in-javascript-vs-php-4fdb)

## Related
- [False](/features/false.md)
- [Falsy](/features/falsy.md)
- [True](/features/true.md)
- [Boolean](/features/boolean.md)
- [Comparison](/features/comparison.md)
- [one](/features/one.md)
- [Minus One -1](/features/minus-one.md)
- [zero](/features/zero.md)

