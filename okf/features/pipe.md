---
type: "PHP Feature"
title: "Pipe ``|``, The Logical Operator"
description: "The ``pipe operator`` is the ``|>`` operator."
resource: "https://wiki.php.net/rfc/pipe-operator-v3"
tags: ["operator", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Pipe ``|``, The Logical Operator

The ``pipe operator`` is the ``|>`` operator. 

The pipe operator chains two callables from left to right: it takes the return value of the first callable and passes it to the right callable.

The pipe operator is equivalent to nested calls of functions, methods, closures. It also only applies to callables with one compulsory parameter, with return values, and without references.

It was added in version 8.5.

The pipe operator is a reference to the ``|`` pipe operator from the command line, which uses the result of the previous, left, command to feed the next, right, command. It should not be confused with the or bitwise operator ``|``, already available.

```php
<?php

    $result = "HELLO world" |> trim(...) |> strtolower(...) |> ucfirst(...);
    // Hello World
    
    // Same as 
    $result = ucfirst(strtolower(trim("HELLO World")));
    // Hello World

?>
```

## Documentation
- [https://wiki.php.net/rfc/pipe-operator-v3](https://wiki.php.net/rfc/pipe-operator-v3)

## See Also
- [PHP 8.5: Pipe operator (|>)](https://php.watch/versions/8.5/pipe-operator)
- [PHP 8.5 Adds Pipe Operator: What it means](https://thephp.foundation/blog/2025/07/11/php-85-adds-pipe-operator/)

## Related
- [Bitwise Operators](/features/bitwise-operator.md)
- [STDOUT](/features/stdout.md)

## Details
- PHP since: 8.5+

