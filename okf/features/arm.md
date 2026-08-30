---
type: "concept"
title: "Arm"
description: "An arm is a branch in a ``match()`` expression."
resource: "https://www.php.net/manual/en/control-structures.match.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Arm

An arm is a branch in a ``match()`` expression. There is the ``default`` arm, and the other ``arms``. The arm includes the case, on the left, and the payload, on the right.

```php
<?php

    // a match with 2 arm, including the default
    $a = match($b) {
        1 => 2,
        default => 3,
    };

?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.match.php](https://www.php.net/manual/en/control-structures.match.php)

## See Also
- [PHP match expression - flow control in PHP with match](https://zetcode.com/php/match-expression/)
- [Match expression](https://php.watch/versions/8.0/match-expression)

## Related
- [If Then Else](/features/if-then.md)
- [Branch](/features/branch.md)
- [Match](/features/match.md)

