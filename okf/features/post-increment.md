---
type: "PHP Feature"
title: "Post-increment"
description: "Post-increment is the ``++`` operator, used on a variable, when it is placed after the variable."
resource: "https://www.php.net/manual/en/language.operators.increment.php"
tags: ["operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Post-increment

Post-increment is the ``++`` operator, used on a variable, when it is placed after the variable. This means that the increment happens after the variable is read: in this case, the first echo displays 1, as the increment happens after the echo call. 

There is also a post-decrement, which uses the operator ``--``, and reduces the variable by 1.

Post-increment and post-decrement have a corresponding pre-increment and pre-decrement.

```php
<?php

    $a = 1;
    echo $a++; // displays 2
    echo $a;   // displays 2

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.increment.php](https://www.php.net/manual/en/language.operators.increment.php)

## See Also
- [Pre-increment and post-increment aren't the same](http://www.hackingwithphp.com/18/1/8/pre-increment-and-post-increment-arent-the-same)

## Related
- [Pre-increment](/features/pre-increment.md)
- [Variables](/features/variable.md)
- [Increment](/features/increment.md)
- [one](/features/one.md)
- [Double](/features/double.md)
- [Minus -](/features/minus.md)

