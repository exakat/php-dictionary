---
type: "exception"
title: "Exception"
description: "Exceptions are a mechanism for handling errors and exceptional situations in a more structured and controlled way compared to traditional error handling methods like using error codes or ``die()`` statements."
resource: "https://www.php.net/manual/en/language.exceptions.php"
tags: ["exception"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Exception

Exceptions are a mechanism for handling errors and exceptional situations in a more structured and controlled way compared to traditional error handling methods like using error codes or ``die()`` statements. Exceptions provide a way to separate the normal flow of code from error-handling code, making it easier to manage errors and maintain clean and readable code.

Exceptions are thrown at the point of detection of the issue, and processed somewhere else in the code, when they are caught by a try-catch statement. Ultimately, exceptions block the execution of the application when they are not caught.

```php
<?php

    class X {
        final const X = 1;
    
        final function method() { }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.exceptions.php](https://www.php.net/manual/en/language.exceptions.php)

## See Also
- [Modern Error handling in PHP](https://netgen.io/blog/modern-error-handling-in-php)
- [PHP try & catch: what are exceptions and how to handle them?](https://benjamincrozat.com/php-exceptions)
- [Mastering Exception Handling in PHP: Ensuring Code Resilience](https://dev.to/devmahfuz/mastering-exception-handling-in-php-ensuring-code-resilience-3pk5)
- [A guide to exception handling in PHP](https://www.honeybadger.io/blog/php-exceptions/)
- [Exception Handling](https://phplang.org/spec/17-exception-handling.html)

## Related
- [throw](/features/throw.md)
- [Try-catch](/features/try-catch.md)
- [Chaining Exceptions](/features/exception-chain.md)
- [RangeException](/features/rangeexception.md)
- [Anonymous Catch](/features/anonymous-catch.md)
- [BadFunctioncallException](/features/badfunctioncallexception.md)
- [Chaining](/features/chaining.md)
- [DomainException](/features/domainexception.md)
- [Error Handling](/features/error-handling.md)
- [Error](/features/error.md)
- [ImagickException](/features/imagickexception.md)
- [LengthException](/features/lengthexception.md)
- [PharException](/features/pharexception.md)
- [PHP Predefined Exception](/features/predefined-exception.md)
- [SVMException](/features/svmexception.md)
- [Throwable](/features/throwable.md)
- [Traversable](/features/traversable.md)
- [Type Error](/features/typerror.md)
- [UnexpectedValueException](/features/unexpectedvalueexception.md)
- [UnhandledMatchError](/features/unhandledmatcherror.md)
- [OutOfRangeException](/features/outofrangeexception.md)
- [OverflowException](/features/overflowexception.md)
- [set_error_handler()](/features/set_error_handler.md)
- [ValueError](/features/valueerror.md)
- [Fatal Error](/features/fatal-error.md)
- [PDOException](/features/pdoexception.md)
- [Resource Leak](/features/resource-leak.md)
- [Transaction](/features/transaction.md)
- [ImagickPixelException](/features/imagickpixelexception.md)
- [Troubleshoot](/features/troubleshoot.md)
- [Continuation](/features/continuation.md)
- [Defer Statement](/features/defer.md)
- [Effect System](/features/effect-system.md)
- [Result Type](/features/result-type.md)

