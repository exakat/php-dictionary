---
type: "PHP Feature"
title: "Argument"
description: "Arguments are values passed to a function or method, at execution time."
resource: "https://www.php.net/manual/en/functions.arguments.php"
tags: ["execution"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Argument

Arguments are values passed to a function or method, at execution time. The argument is the execution time value, and the recipient of that value is the parameter, which is located in the signature of the method. They may be a variable or an expression.

```php
<?php

    function foo($parameter) {}

    $argument = 1;
    foo($argument + 2);

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.arguments.php](https://www.php.net/manual/en/functions.arguments.php)

## See Also
- [What's the difference between an argument and a parameter?](https://stackoverflow.com/questions/156767/whats-the-difference-between-an-argument-and-a-parameter)

## Related
- [Parameter](/features/parameter.md)
- [Comma](/features/comma.md)
- [Parenthesis](/features/parenthesis.md)

