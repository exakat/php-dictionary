---
type: "PHP Feature"
title: "Typo"
description: "A typo is short for ``typographical error``."
resource: "https://en.wikipedia.org/wiki/Typographical_error"
tags: ["semantic"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Typo

A typo is short for ``typographical error``. It refers to a mistake made in the typing of the code. Typographical errors can include misspelled words and misplaced operators. Typos can occur in various contexts, such as types, expressions, and naming.

A typo can lead to a visible or invisible error. A typo in the function name of ``array_slice()``, like ``array_sloce()``, leads to a fatal error, as the function is not defined.

On the other hand, a typo on the same function, written ``array_splice()``, note the extra p, leads to argument errors, as this new function exists, but requests different types of data.

Typos happen in any text-based system.

```php
<?php

    // The typo has placed the === false INSIDE the in_array(), and changes the behavior
    if (in_array($array, $value, $strict === false)) {
    
    }
    
    // the type and is not expected, instead of an integer
    function foo(ant $i) {
    
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Typographical_error](https://en.wikipedia.org/wiki/Typographical_error)

## See Also
- [Top Common PHP Errors](https://medium.com/@jaydipkumarjha/top-common-php-errors-9dd20dfcdf81)
- [Top Common PHP Errors and How to Fix Them](https://olixlab.com/blog/top-common-php-errors-and-how-to-fix-them/)

## Related
- [Silent Behavior](/features/silent.md)
- [Semantics](/features/semantics.md)

