---
type: "keyword"
title: "Simple Switch"
description: "A simple switch is a switch where all the cases are simple literals."
resource: "https://www.php.net/manual/en/control-structures.switch.php"
tags: ["optimisation", "keyword", "control flow"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Simple Switch

A simple switch is a switch where all the cases are simple literals. This helps PHP optimize the command and finds the correct case immediately, instead of checking them one by one.

```php
<?php

switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}

?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.switch.php](https://www.php.net/manual/en/control-structures.switch.php)

## See Also
- [PHP 7.2's 'switch' optimisations](https://derickrethans.nl/php7.2-switch.html)

## Related
- [Switch](/features/switch.md)
- [Match](/features/match.md)
- [If Then Else](/features/if-then.md)
- [Compact Array](/features/compact-array.md)

## Details
- PHP since: 4.0

