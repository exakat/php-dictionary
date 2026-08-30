---
type: "control flow"
title: "For"
description: "``for()`` is a loop structure."
resource: "https://www.php.net/manual/en/control-structures.for.php"
tags: ["control flow", "keyword"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# For

``for()`` is a loop structure. It is configured with an initialization expression, an ending expression and an increment expression. 

The ``for()`` loop executes the init expression first, and only once. Then it executes the block, the increment and the ending. When the ending is false, it exits the loop.

The initialization, ending and increment expression may all host several instructions: they have to be separated by comma, rather than semi colons.

Part of the block execution may be skipped by using the ``continue`` keyword.

```php
<?php

/*
for(initialization; ending; increment) {
    block
}
*/

for($i = 0; $i < 10; ++$i) {
    print "$i\n";
}

for($i = 0, $j = 0; $i < 10; ++$i, $j += 2) {
    print "$i $j\n";  // 1 2, 2 4, 3 6....
}

?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.for.php](https://www.php.net/manual/en/control-structures.for.php)

## See Also
- [Stop using for loops and start showing intent](https://dev.to/rocksheep/stop-using-for-loops-and-start-showing-intent-3am0)
- [PHP Loop: For, ForEach, While, Do While](https://www.guru99.com/php-loop.html)

## Related
- [Continue](/features/continue.md)
- [foreach()](/features/foreach.md)
- [Loops](/features/loop.md)
- [While](/features/while.md)
- [Do While](/features/do-while.md)
- [Control Flow](/features/control-flow.md)
- [Blind Variable](/features/blind-key.md)
- [Control Structures](/features/control-structure.md)
- [Semicolon ;](/features/semicolon.md)

