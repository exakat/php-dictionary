---
type: "PHP Feature"
title: "Precedence"
description: "Precedence organizes the way operators are executed, when they are mixed in the same expression."
resource: "https://www.php.net/manual/en/language.operators.precedence.php"
tags: ["operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Precedence

Precedence organizes the way operators are executed, when they are mixed in the same expression.

For example, ``1 + 2 * 3`` will produce ``7``, since ``*`` has a higher precedence than ``+``. 

Every operator has a precedence, and when they have the same precedence, the rightmost one yield to the leftmost one.

Precedence offers some reading surprises to human readers. For example, ``! $b instanceof \X`` really applies ``instanceof`` first, and ``&&`` has a higher priority than ``and``, even though they perform the same function.

```php
<?php

var_dump(!$b instanceof \X);
var_dump($a = 1 and 2);

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.precedence.php](https://www.php.net/manual/en/language.operators.precedence.php)

## See Also
- [Understanding PHP Operators of Logic, or || and && and ! a lot more](https://wpshout.com/php-logic-operators/)

## Related
- [Operators](/features/operator.md)

