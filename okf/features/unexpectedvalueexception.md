---
type: "exception"
title: "UnexpectedValueException"
description: "The ``UnexpectedValueException`` exception is thrown if a value does not match with a set of expected values."
resource: "https://www.php.net/manual/en/class.unexpectedvalueexception.php"
tags: ["exception"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# UnexpectedValueException

The ``UnexpectedValueException`` exception is thrown if a value does not match with a set of expected values.

This happens when the value is not in a list of expected values, or if it is outside an interval of validity.

This exception is mainly thrown by the Phar and SPL extensions.

```php
<?php

    function foo(string $s) {
        if (empty($s)) {
           throw new UnexpectedValueException('Foo() expects a non-empty string');
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.unexpectedvalueexception.php](https://www.php.net/manual/en/class.unexpectedvalueexception.php)

## See Also
- [PHP: SPL Exceptions](https://www.php.net/manual/en/spl.exceptions.php)

## Related
- [Exception](/features/exception.md)
- [Phar](/features/phar.md)
- [Standard PHP Library (SPL)](/features/spl.md)
- [RuntimeException](/features/runtimeexception.md)

## Details
- PHP since: 5.1

