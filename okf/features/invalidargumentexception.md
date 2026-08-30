---
type: "exception"
title: "InvalidArgumentException"
description: "``InvalidArgumentException`` is an ``Exception`` thrown when an argument is not of the expected type."
resource: "https://www.php.net/manual/en/class.invalidargumentexception.php"
tags: ["exception"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# InvalidArgumentException

``InvalidArgumentException`` is an ``Exception`` thrown when an argument is not of the expected type. It is a ``LogicException``, and it may be thrown when using SPL classes.

```php
<?php

    function foo(string $a) {}
    
    // OK
    foo("abc");
    
    // KO : invalid argument
    foo(12);

?>
```

## Documentation
- [https://www.php.net/manual/en/class.invalidargumentexception.php](https://www.php.net/manual/en/class.invalidargumentexception.php)

## See Also
- [How to Handle InvalidArgument Exception in PHP](https://rollbar.com/blog/php-invalidargumentexception/)

## Related
- [LogicException](/features/logicexception.md)

