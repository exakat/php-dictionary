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

## See Also

+ [Modern Error handling in PHP](https://netgen.io/blog/modern-error-handling-in-php)
+ [PHP try & catch: what are exceptions and how to handle them?](https://benjamincrozat.com/php-exceptions)
+ [Mastering Exception Handling in PHP: Ensuring Code Resilience](https://dev.to/devmahfuz/mastering-exception-handling-in-php-ensuring-code-resilience-3pk5)
+ [A guide to exception handling in PHP](https://www.honeybadger.io/blog/php-exceptions/)

Related : [throw](throw), [Try-catch](Try-catch), [Chaining Exceptions](Chaining Exceptions), [RangeException](RangeException), [Anonymous Catch](Anonymous Catch), [BadFunctioncallException](BadFunctioncallException), [Chaining](Chaining), [DomainException](DomainException), [Error Handling](Error Handling), [Error](Error), [Chaining Exceptions](Chaining Exceptions), [ImagickException](ImagickException), [LengthException](LengthException), [PharException](PharException), [PHP Predefined Exception](PHP Predefined Exception), [SVMException](SVMException), [Throwable](Throwable), [Traversable](Traversable), [Type Error](Type Error), [UnexpectedValueException](UnexpectedValueException), [UnhandledMatchError](UnhandledMatchError), [OutOfRangeException](OutOfRangeException), [OverflowException](OverflowException), [set_error_handler()](set_error_handler()), [ValueError](ValueError), [Fatal Error](Fatal Error), [PDOException](PDOException), [Resource Leak](Resource Leak), [Transaction](Transaction), [ImagickPixelException](ImagickPixelException), [Troubleshoot](Troubleshoot), [Continuation](Continuation), [Defer Statement](Defer Statement), [Effect System](Effect System), [Result Type](Result Type)
