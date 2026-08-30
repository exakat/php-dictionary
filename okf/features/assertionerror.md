---
type: "PHP Feature"
title: "AssertionError"
description: "``AssertionError`` is thrown when an assertion made with ``assert()`` fails."
resource: "https://www.php.net/manual/en/class.assertionerror.php"
tags: ["error", "native error"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# AssertionError

``AssertionError`` is thrown when an assertion made with ``assert()`` fails.

Unlike most engine errors, ``AssertionError`` is raised by user-controlled code: it only fires when the ``zend.assertions`` directive enables assertion execution, and the ``assert.exception`` directive is left at its default of ``1``, so that a failed assertion is turned into a thrown error instead of a silent or warning-based failure.

``AssertionError`` extends ``Error``, not ``Exception``, which places it alongside engine-level failures such as ``TypeError`` and ``ArithmeticError`` rather than the SPL exception hierarchy. Since assertions are meant to be a zero-cost development aid, ``AssertionError`` should generally not be relied upon in production flow control: when ``zend.assertions`` is set to ``-1`` the assertion code is not even compiled, and no error is thrown at all.

```php
<?php

    $age = -5;
    
    try {
        assert($age >= 0, 'Age cannot be negative');
    } catch (AssertionError $e) {
        print 'Assertion failed: ' . $e->getMessage();
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.assertionerror.php](https://www.php.net/manual/en/class.assertionerror.php)

## See Also
- [assert - Manual](https://www.php.net/manual/en/function.assert.php)
- [PHP assertions and their usage](https://www.exakat.io/en/php-assertions-usage/)

## Related
- [Assertions](/features/assertion.md)
- [zend.assertions](/features/zend-assertions.md)
- [Error](/features/error.md)
- [TypeError](/features/typeerror.md)
- [ArithmeticError Error](/features/arithmeticerror.md)
- [Runtime Checks](/features/runtime-checks.md)

## Details
- PHP since: 7.0

