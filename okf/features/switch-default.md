---
type: "keyword"
title: "Switch Default"
description: "A switch default, also called default, is the catch-all option in a ``switch()`` or a ``match()`` expression."
resource: "https://www.php.net/manual/en/control-structures.switch.php"
tags: ["keyword"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Switch Default

A switch default, also called default, is the catch-all option in a ``switch()`` or a ``match()`` expression. 

In a ``switch()``, the default case may be stacked with other cases, to apply the same code. This is not possible with ``match()``.

```php
<?php

    switch($x) {
        case 'a':
        default:
            $a = 1;
            // fall through
            
        case 'b' :
            $a =2;
            break 1;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.switch.php](https://www.php.net/manual/en/control-structures.switch.php)

## See Also
- [match](https://www.php.net/manual/en/control-structures.match.php)
- [Switch statement](https://en.wikipedia.org/wiki/Switch_statement)

## Related
- [Default](/features/default.md)
- [Switch](/features/switch.md)
- [Match](/features/match.md)
- [Switch Case](/features/switch-case.md)

