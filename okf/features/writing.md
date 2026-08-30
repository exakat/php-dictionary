---
type: "concept"
title: "Writing"
description: "Writing is the action to replace a value in a data container with another one."
resource: "https://en.wikipedia.org/wiki/Assignment_(computer_science)"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Writing

Writing is the action to replace a value in a data container with another one. It does not need to be read. The value is simply changed.

Writing happens when a value is being assigned a new value, used with some operators such as ``++`` or ``--``. 

This operation is usually the counterpart of reading. It may also happen at the same time.

```php
<?php

    $x = 1; // writing 1
    
    ++$x; // reading 1 and writing 2 
    
    echo $x; // reading 2

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Assignment_(computer_science)](https://en.wikipedia.org/wiki/Assignment_(computer_science))

## See Also
- [Assignment operators](https://www.php.net/manual/en/language.operators.assignment.php)
- [Incrementing/Decrementing Operators](https://www.php.net/manual/en/language.operators.increment.php)

## Related
- [Reading](/features/reading.md)

