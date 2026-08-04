# Error Handler
The PHP error handler is a method that manages errors when they arise, instead of the default PHP handler. 

The error handler is set with the ``set_error_handler()`` function. 

The error handler is convenient to translate errors, handle custom levels of errors, or convert errors to exceptions. 

There is a separate exception handler.
```php
<?php

    set_error_handler('customErrorHandler');
    
    function customErrorHandler($errno, $errstr, $errfile, $errline, array $errcontext)
    {
        // Handles @ error suppression
        if (error_reporting === 0)
        {
            return false;
        }
    
        throw new Exception($errstr, 0, $errno, $errfile, $errline);
    }

?>
```

## See Also

+ [Convert Errors to Exceptions in PHP](https://joshtronic.com/2013/07/15/convert-errors-to-exceptions/)
+ [Modern Error handling in PHP](https://netgen.io/blog/modern-error-handling-in-php)

Related : [PHP Handlers](PHP Handlers), [Exception Handler](Exception Handler), [Shutdown Function](Shutdown Function), [Error Handling](Error Handling), [Error Reporting](Error Reporting)
