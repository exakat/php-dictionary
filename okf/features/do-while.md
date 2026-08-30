---
type: "control flow"
title: "Do While"
description: "Do While is a loop structure."
resource: "https://www.php.net/manual/en/control-structures.do.while.php"
tags: ["control flow", "keyword"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Do While

Do While is a loop structure. It runs the block of code until the condition is not met anymore. The block is run once before the condition is checked, so it is always run at least once.

Part of the block execution may be skipped by using the ``continue`` keyword.

```php
<?php

    $i = 1;
    do {
        print "$i\n";
    } while($i < 10);

?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.do.while.php](https://www.php.net/manual/en/control-structures.do.while.php)

## See Also
- [PHP: while](https://www.php.net/manual/en/control-structures.while.php)
- [Do while loop](https://en.wikipedia.org/wiki/Do_while_loop)

## Related
- [Continue](/features/continue.md)
- [foreach()](/features/foreach.md)
- [Loops](/features/loop.md)
- [For](/features/for.md)
- [While](/features/while.md)
- [Control Flow](/features/control-flow.md)

