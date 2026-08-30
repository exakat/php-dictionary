---
type: "exception"
title: "LogicException"
description: "Exception that represents error in the program logic."
resource: "https://www.php.net/manual/en/class.logicexception.php"
tags: ["exception"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# LogicException

Exception that represents error in the program logic. This kind of exception should lead directly to a fix in your code.

``LogicException`` is part of the SPL exception hierarchy introduced in version 5.1, extending the base ``Exception`` class. It signals a fault that could, in principle, be detected before runtime by inspecting the code, a violated precondition, an unreachable code path, or a contract broken by the caller, as opposed to ``RuntimeException``, whose sibling hierarchy covers errors that can only be detected while the script is executing, such as I/O failures or unexpected external data.

PHP never throws a bare ``LogicException`` itself; it serves as the common base for more specific SPL exceptions: ``BadFunctionCallException``, and its child ``BadMethodCallException``, for calling an undefined function or method, ``DomainException`` for a value outside a defined set of valid values, ``InvalidArgumentException`` for an argument of the wrong type, ``LengthException`` for a value of invalid length, and ``OutOfRangeException`` for an illegal index requested outside of iteration. Catching ``LogicException`` lets code handle all of these programmer-error cases with a single ``catch`` block.

```php
<?php

    // No direct exemples. Use the children classes.

?>
```

## Documentation
- [https://www.php.net/manual/en/class.logicexception.php](https://www.php.net/manual/en/class.logicexception.php)

## See Also
- [RuntimeException](https://www.php.net/manual/en/class.runtimeexception.php)
- [PHP: SPL Exceptions](https://www.php.net/manual/en/spl.exceptions.php)

## Related
- [BadFunctioncallException](/features/badfunctioncallexception.md)
- [DomainException](/features/domainexception.md)
- [LengthException](/features/lengthexception.md)
- [OutOfRangeException](/features/outofrangeexception.md)
- [InvalidArgumentException](/features/invalidargumentexception.md)
- [RuntimeException](/features/runtimeexception.md)

