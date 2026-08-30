---
type: "exception"
title: "BadFunctioncallException"
description: "The ``BadFunctioncallException`` exception is thrown if the callback refers to an undefined function or if some arguments are missing."
resource: "https://www.php.net/manual/en/class.lengthexception.php"
tags: ["exception"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# BadFunctioncallException

The ``BadFunctioncallException`` exception is thrown if the callback refers to an undefined function or if some arguments are missing.

``BadFunctioncallException`` is defined by the SPL extension. It is not natively used.

```php
<?php

    function foo(string $s) {
        if (empty($s)) {
           throw new \UnexpectedValueException('Foo() expects a non-empty string');
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.lengthexception.php](https://www.php.net/manual/en/class.lengthexception.php)

## See Also
- [PHP: SPL Exceptions](https://www.php.net/manual/en/spl.exceptions.php)
- [How to use built-in SPL exception classes for better error handling](https://codeutopia.net/blog/2011/05/06/how-to-use-built-in-spl-exception-classes-for-better-error-handling/)

## Related
- [Exception](/features/exception.md)
- [LogicException](/features/logicexception.md)

## Details
- PHP since: 5.1

