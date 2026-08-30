---
type: "exception"
title: "UnhandledMatchError"
description: "An ``UnhandledMatchError`` error is thrown when the subject passed to a match expression is not handled by any case of the match expression."
resource: "https://www.php.net/manual/en/class.unhandledmatcherror.php"
tags: ["exception"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# UnhandledMatchError

An ``UnhandledMatchError`` error is thrown when the subject passed to a match expression is not handled by any case of the match expression. This means that all the cases have been exhausted, and then, the ``default`` case is missing. 

Instead of finishing the ``match`` expression without any returned value, it throws an exception and stops the execution. This is a different behavior than ``switch``, which will continue the processing, even if nothing was found, potentially leading to unexpected situations.

```php
<?php

    $b = match(3) {
        1 => 'A',
        2 => 'b',
    };

?>
```

## Documentation
- [https://www.php.net/manual/en/class.unhandledmatcherror.php](https://www.php.net/manual/en/class.unhandledmatcherror.php)

## See Also
- [Match expression](https://php.watch/versions/8.0/match-expression)

## Related
- [Exception](/features/exception.md)
- [Error](/features/error.md)
- [Match](/features/match.md)

