---
type: "exception"
title: "RuntimeException"
description: "Exception thrown if an error which can only be found on runtime occurs."
resource: "https://www.php.net/manual/en/class.runtimeexception.php"
tags: ["exception", "native exception"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# RuntimeException

Exception thrown if an error which can only be found on runtime occurs.

``RuntimeException`` is part of the SPL exception hierarchy introduced in version 5.1, extending the base ``Exception`` class. It is the sibling hierarchy to ``LogicException``: while ``LogicException`` covers faults that could, in principle, be detected before runtime by inspecting the code, ``RuntimeException`` covers errors that can only be detected while the script is executing, such as I/O failures, unexpected external data, or a value becoming invalid only once it is used.

PHP rarely throws a bare ``RuntimeException`` itself; it mostly serves as the common base for more specific SPL exceptions such as ``OutOfBoundsException``, ``OverflowException``, ``RangeException``, ``UnderflowException`` and ``UnexpectedValueException``, and it is also the ancestor of extension-provided exceptions such as ``PDOException`` and ``mysqli_sql_exception``. Catching ``RuntimeException`` lets code handle all of these execution-time failures with a single ``catch`` block, without also swallowing programmer errors caught by ``LogicException``.

```php
<?php

try {
    throw new RuntimeException('Connection lost while reading the stream');
} catch (RuntimeException $e) {
    print 'Runtime failure: ' . $e->getMessage();
}

?>
```

## Documentation
- [https://www.php.net/manual/en/class.runtimeexception.php](https://www.php.net/manual/en/class.runtimeexception.php)

## See Also
- [LogicException](https://www.php.net/manual/en/class.logicexception.php)
- [PHP: SPL Exceptions](https://www.php.net/manual/en/spl.exceptions.php)

## Related
- [Exception](/features/exception.md)
- [LogicException](/features/logicexception.md)
- [RangeException](/features/rangeexception.md)
- [OverflowException](/features/overflowexception.md)
- [UnexpectedValueException](/features/unexpectedvalueexception.md)
- [PDOException](/features/pdoexception.md)
- [mysqli_sql_exception](/features/mysqli_sql_exception.md)
- [PHP Predefined Exception](/features/predefined-exception.md)

## Details
- PHP since: 5.1

