---
type: "PHP Feature"
title: "Error"
description: "The ``Error`` class is a base class for all internal PHP error exceptions."
resource: "https://www.php.net/manual/en/class.error.php"
tags: ["error"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Error

The ``Error`` class is a base class for all internal PHP error exceptions. It represents an error that occurs during the execution of PHP code. The Error class extends the built-in Throwable interface, making it possible to catch and handle these error exceptions using try-catch blocks.

The Error class has several child classes that represent specific types of errors. Some common child classes include:

+ ParseError: represents a syntax error that occurs during parsing of PHP code
+ TypeError: represents a type-related error, such as passing an incorrect argument type to a function or method
+ DivisionByZeroError: represents an error that occurs when dividing a number by zero
+ OutOfMemoryError: represents an error that occurs when the PHP process runs out of memory

See the example that demonstrates catching and handling a ``ParseError`` below. In the example, the ``eval()`` function is used to evaluate a string of PHP code. However, the code contains a syntax error with a missing semicolon. This results in a ParseError being thrown. We use a try-catch block to catch the ParseError exception, and then display the error message using the ``getMessage()`` method.

It's important to note that these errors are only thrown by internal PHP errors. User-generated errors, e.g., triggered using the ``trigger_error()`` function, are not instances of the Error class. Instead, they are represented by the ErrorException class, which extends Exception.

```php
<?php

    try {
        eval('echo Hello, World!'); // Missing semicolon generates a ParseError
    } catch (ParseError $e) {
        echo 'Caught ParseError: ' . $e->getMessage();
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/class.error.php](https://www.php.net/manual/en/class.error.php)

## See Also
- [PHP Types of Errors](https://www.geeksforgeeks.org/php/php-types-of-errors/)

## Related
- [Exception](/features/exception.md)
- [throw](/features/throw.md)
- [Try-catch](/features/try-catch.md)
- [ParseError](/features/parseerror.md)
- [TypeError](/features/typeerror.md)
- [DivisionByZeroError](/features/divisionbyzeroerror.md)
- [Throwable](/features/throwable.md)
- [Traversable](/features/traversable.md)
- [UnhandledMatchError](/features/unhandledmatcherror.md)
- [Downtime](/features/downtime.md)
- [Fatal Error](/features/fatal-error.md)
- [Notice](/features/notice.md)
- [ValueError](/features/valueerror.md)
- [Warning](/features/warning.md)
- [Error Suppression](/features/error-suppression.md)
- [html_errors](/features/html_errors.md)
- [Lint, Won't Execute](/features/lint-wont-execute.md)
- [Troubleshoot](/features/troubleshoot.md)

