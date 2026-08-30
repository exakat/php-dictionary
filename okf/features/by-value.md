---
type: "PHP Feature"
title: "Passing By Value"
description: "When calling a method, or returning from it, data may be passed by value or by reference."
resource: "https://www.php.net/manual/en/functions.arguments.php"
tags: ["feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Passing By Value

When calling a method, or returning from it, data may be passed by value or by reference. 

By value, a copy of the data is passed: any modification on that value inside the method will not be reflected in the original value. 

This is the default way of passing data to methods: the alternative way is to use by reference. 

Passing by value may be memory-intensive when passing a large array. This is not the case for objects, which are always passed by reference.

Returned values are passed back to the calling context with the same rule as for parameters.

```php
<?php

$a = 0;
foo($a);  // displays 1
print $a; // displays 0

function foo($a) {
    ++$a;
    echo $a;
}

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.arguments.php](https://www.php.net/manual/en/functions.arguments.php)

## See Also
- [PHP Copy by Value vs Reference](https://www.zetcode.com/php/copy-value-reference/)

## Related
- [Passing By Reference](/features/by-reference.md)

