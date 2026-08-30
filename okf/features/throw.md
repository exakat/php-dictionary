---
type: "keyword"
title: "throw"
description: "Throw is the keyword which raises an exception."
resource: "https://www.php.net/manual/en/language.exceptions.php"
tags: ["keyword"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# throw

Throw is the keyword which raises an exception.

When an exception is thrown, the normal flow of the program is interrupted, and PHP starts looking for an exception handler to catch and handle the exception.

```php
<?php
try{
    throw new Exception('Error');
} catch (\Exception $e) {
    print 'Warning : error was identified!';
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.exceptions.php](https://www.php.net/manual/en/language.exceptions.php)

## See Also
- [Exceptions - PHP Advance](https://jobtensor.com/Tutorial/PHP/en/Exceptions)

## Related
- [Try-catch](/features/try-catch.md)
- [Exception](/features/exception.md)
- [ArgumentCountError](/features/argumentcounterror.md)
- [ArithmeticError Error](/features/arithmeticerror.md)
- [Error](/features/error.md)
- [Chaining Exceptions](/features/exception-chain.md)
- [mysqli_sql_exception](/features/mysqli_sql_exception.md)
- [PHP Predefined Exception](/features/predefined-exception.md)
- [Jump](/features/jump.md)
- [Method Compatibility](/features/method-compatibility.md)
- [Return Value](/features/return-value.md)

