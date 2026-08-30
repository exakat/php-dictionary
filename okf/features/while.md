---
type: "control flow"
title: "While"
description: "While is a loop structure."
resource: "https://www.php.net/manual/en/control-structures.while.php"
tags: ["control flow", "keyword", "command"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# While

While is a loop structure. It runs the block of code until the condition is not met anymore. 

Part of the loop execution may be skipped by using the ``continue`` keyword.

```php
<?php

/*
while(condition) {
    // the block
}
*/

$i = 0;
while($i < 10) {
    print "$i\n";
}

?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.while.php](https://www.php.net/manual/en/control-structures.while.php)

## See Also
- [While Loop in PHP](https://www.scaler.com/topics/php-tutorial/while-loop-in-php/)

## Related
- [Continue](/features/continue.md)
- [Do While](/features/do-while.md)
- [foreach()](/features/foreach.md)
- [Loops](/features/loop.md)
- [For](/features/for.md)
- [Control Flow](/features/control-flow.md)

