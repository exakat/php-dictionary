---
type: "PHP Feature"
title: "Variadic"
description: "Three dots, aka ellipsis, is an operator to spread or collect array values."
resource: "https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list"
tags: ["parameter", "arbitrary number of argument"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Variadic

Three dots, aka ellipsis, is an operator to spread or collect array values. 

Applied to an array, it spreads the values of the array as distinct elements.

Used in a function signature, it collects all the values into one array.

```php
<?php

$array = [1, 2, 3];

// same as foo(0, 1,2, 3);
foo(0, ...$array);


function foo($special, ...$others) {
    // with the above call
    // $special === 0
    // $others === [1, 2, 3, 4]
}

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list](https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list)

## See Also
- [Variadic Function in PHP](https://dev.to/sharminshanta/variadic-function-in-php-49c1)

## Related
- [Variable Arguments](/features/variable-argument.md)
- [Array Spread](/features/array-spread.md)
- [Ellipsis](/features/ellipsis.md)
- [Unpacking](/features/unpacking.md)
- [Arbitrary Number Of Argument](/features/arbitrary-argument.md)
- [func_get_args()](/features/func_get_args.md)
- [Wildcard](/features/wildcard.md)

## Details
- PHP since: 5.6

