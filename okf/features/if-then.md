---
type: "keyword"
title: "If Then Else"
description: "A ``if-then-else`` command branches the execution based on a condition."
resource: "https://www.php.net/manual/en/control-structures.if.php"
tags: ["keyword", "control flow"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# If Then Else

A ``if-then-else`` command branches the execution based on a condition. When the condition is true, the first branch, called ``then`` is executed. When the condition is false, the second branch, called ``else``, is executed. 

If-then structures may be chained with the ``elseif`` keyword. The ``else`` branch is then a new if-then structure, with a second condition.

```php
<?php

    $number = rand(0, 10);
    
    if ($number % 2 === 0) {
        print "$number is even\n";
    } else {
        print "$number is odd\n";
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.if.php](https://www.php.net/manual/en/control-structures.if.php)

## See Also
- [How to use PHP if-else for conditional logic and programming](https://www.ionos.com/digitalguide/websites/web-development/php-if-else/)

## Related
- [Switch](/features/switch.md)
- [Match](/features/match.md)
- [Ternary Operator](/features/ternary.md)
- [Coalesce Operator](/features/coalesce.md)
- [Arm](/features/arm.md)
- [Branch](/features/branch.md)
- [Jump](/features/jump.md)
- [Conditional Structures](/features/conditional-structure.md)
- [Control Flow](/features/control-flow.md)
- [Simple Switch](/features/simple-switch.md)
- [Iffectation](/features/iffectation.md)

