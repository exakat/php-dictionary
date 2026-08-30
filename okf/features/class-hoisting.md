---
type: "concept"
title: "Class Hoisting"
description: "Class hoisting is a compilation mode where the declarations of functions, classes..."
resource: "https://en.wikipedia.org/wiki/Declaration_(computer_programming)"
tags: ["concept", "compilation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Class Hoisting

Class hoisting is a compilation mode where the declarations of functions, classes... are moved before their actual usage.

This allows the usage of functions that are declared later in the code. 

PHP doesn't do class hoisting: it does two passes on the code, and later, triggers the autoload if a class is missing.

```php
<?php

// displays foo
foo();

function foo() { echo __FUNCTION__; }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Declaration_(computer_programming)](https://en.wikipedia.org/wiki/Declaration_(computer_programming))

## See Also
- [Early binding in PHP](https://www.npopov.com/2021/10/20/Early-binding-in-PHP.html)

## Related
- [Class Autoloading](/features/autoload.md)
- [Hoisting](/features/hoisting.md)
- [Order Of Execution](/features/order-of-execution.md)

