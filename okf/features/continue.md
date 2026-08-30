---
type: "keyword"
title: "Continue"
description: "``continue`` is used within looping structures to skip the rest of the current loop iteration and resume the execution at the condition evaluation and then the beginning of the next iteration."
resource: "https://www.php.net/manual/en/control-structures.continue.php"
tags: ["keyword"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Continue

``continue`` is used within looping structures to skip the rest of the current loop iteration and resume the execution at the condition evaluation and then the beginning of the next iteration.

``continue`` is not possible inside a ``switch()`` structure.

```php
<?php

    foreach ($arr as $key => $value) {
        if (!($key % 2)) { // skip even members
            continue;
        }
        do_something_odd($value);
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.continue.php](https://www.php.net/manual/en/control-structures.continue.php)

## See Also
- [break](https://www.php.net/manual/en/control-structures.break.php)
- [Control Structures](https://www.php.net/manual/en/language.control-structures.php)

## Related
- [Break](/features/break.md)
- [Control Flow](/features/control-flow.md)
- [Do While](/features/do-while.md)
- [For](/features/for.md)
- [foreach()](/features/foreach.md)
- [While](/features/while.md)
- [Jump](/features/jump.md)

