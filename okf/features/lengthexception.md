---
type: "exception"
title: "LengthException"
description: "The LengthException exception is thrown if a length is invalid."
resource: "https://www.php.net/manual/en/class.lengthexception.php"
tags: ["exception"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# LengthException

The LengthException exception is thrown if a length is invalid.

``LengthException`` is one of the exception classes provided by the Standard PHP Library, called SPL, available since PHP 5.1. It extends ``LogicException``, which itself extends the base ``Exception`` class, placing it in the family of exceptions that represent errors in the program's logic, as opposed to runtime conditions that could not have been foreseen. Its intended use is to signal that a given length, whether of a string, an array, or any other measurable collection, does not meet the constraints expected by the code, for example a fixed-size buffer receiving too much data, or an argument that must contain a minimum number of characters.

Despite being part of the SPL, ``LengthException`` is not thrown by any native PHP function or class: PHP's own standard library and internal functions instead raise ``ValueError`` or ``TypeError`` for equivalent situations since PHP 8. ``LengthException`` is therefore mostly a userland convention, adopted by libraries and frameworks that follow the SPL exception hierarchy to give callers a precise, catchable exception type when validating lengths themselves, rather than relying only on a generic ``Exception`` or ``InvalidArgumentException``.

Because it is a subclass of ``LogicException``, catching ``LogicException`` also catches ``LengthException``, which lets calling code choose the granularity of the ``catch`` block depending on whether it needs to react specifically to length problems, or to logic errors in general.

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
- [LogicException](https://www.php.net/manual/en/class.logicexception.php)
- [PHP: SPL Exceptions](https://www.php.net/manual/en/spl.exceptions.php)

## Related
- [Exception](/features/exception.md)
- [LogicException](/features/logicexception.md)

## Details
- PHP since: 5.1

