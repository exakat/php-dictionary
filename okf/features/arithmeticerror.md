---
type: "exception"
title: "ArithmeticError Error"
description: "``ArithmeticError`` is thrown when an error occurs while performing mathematical operations."
resource: "https://www.php.net/manual/en/class.arithmeticerror.php"
tags: ["exception", "error"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# ArithmeticError Error

``ArithmeticError`` is thrown when an error occurs while performing mathematical operations. These errors include attempting to perform a bitshift by a negative amount, and any call to ``intdiv()`` that would result in a value outside the possible bounds of an integer. 

Currently, a bitshift is the main source for arithmetic exceptions. The other is division by zero, which is a child class.

``DivisionByZeroError`` is an ``ArithmeticError``. 

When ``ArithmeticError`` are not raised, PHP may return a ``NaN`` value, and ``INF`` value, or also ``0``.

```php
<?php

// ArithmeticError is catchable
try {
    8 >> -1;
} catch (ArithmeticError) {
    print 'Cannot do a negative shift';
}

try {
    10 / 0;
} catch (DivisionByZeroError) { // or DivisionByZeroError
    print 'Cannot divide by 0';
}

print sqrt(-10); // NaN

print log(0); // -INF

?>
```

## Documentation
- [https://www.php.net/manual/en/class.arithmeticerror.php](https://www.php.net/manual/en/class.arithmeticerror.php)

## See Also
- [Modern Error handling in PHP](https://netgen.io/blog/modern-error-handling-in-php)

## Related
- [throw](/features/throw.md)
- [Try-catch](/features/try-catch.md)
- [DivisionByZeroError](/features/divisionbyzeroerror.md)
- [Not A Number (NAN)](/features/nan.md)
- [INF](/features/inf.md)
- [zero](/features/zero.md)

