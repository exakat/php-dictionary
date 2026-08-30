---
type: "PHP Feature"
title: "Lexical Variable"
description: "A lexical variable is the type of variable that appears in the ``use`` part of a closure definition."
resource: "https://www.php.net/manual/en/functions.anonymous.php"
tags: ["variable", "closure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Lexical Variable

A lexical variable is the type of variable that appears in the ``use`` part of a closure definition. They are both variables of the current scope, which defines the closure, and parameters of the scope of the closure.

```php
<?php

$c = 1;

function ($a, $b) use ($c) {
    // doSomething();
}

?>
```

## Documentation
- [https://www.php.net/manual/en/functions.anonymous.php](https://www.php.net/manual/en/functions.anonymous.php)

## See Also
- [PHP Anonymous Functions](https://www.phptutorial.net/php-tutorial/php-anonymous-functions/)

## Related
- [Closure](/features/closure.md)
- [Variables](/features/variable.md)
- [Closure Binding](/features/closure-binding.md)
- [Anonymous Function](/features/anonymous-function.md)

