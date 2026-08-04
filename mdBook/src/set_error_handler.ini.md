# set_error_handler()
``set_error_handler()`` is a native PHP function, which replaces the default error handler from PHP with a custom one.

``set_error_handler()`` is often used for custom logging, user-friendly or user-facing error messages, and debugging with extra details.

``set_error_handler()`` takes a custom function, or closure, that is called upon encountering a triggered error: such errors are raised by code execution, or trigger manually with ``trigger_error()``. 

``set_error_handler()`` takes list of handled type of errors: for example, ``E_WARNING`` configures the custom handler to be called only for warnings. All other errors will be passed to the PHP default handler. In other words, each successive call of ``set_error_handler()`` replaces the preceding one.

The callback in ``set_error_handler()`` must terminate the script, with ``exit``, if needed. When that callback returns, the code execution continues.

The callback in ``set_error_handler()`` returns a boolean. When it returns ``true``, the warning is supposed to be handled, and PHP won't process it further. When it returns ``false``, the warning is also processed by PHP, on top of the custom handler: in particular, the error message will be displayed, according to configuration. 

``set_error_handler()`` does not handle ``Error``, such as fatal error: they must be execution errors. 

``set_error_handler()`` does not handle ``Exception``, which are handled by ``try-catch-finally`` structures. 

``set_error_handler()`` may be reverted to default with ``restore_error_handler()``.

```php
<?php

    function myHandler(
        int $errno,
        string $errstr,
        string $errfile = '',
        int $errline = 0,
        array $errcontext = []
    ): bool {
        print 'A warning was detected: '.$errstr;
        
        return true;
    }
    
    set_error_handler(myHandler(...), E_USER_WARNING);
    
    trigger_error('hello!', E_USER_WARNING);
    
    // PHP only
    trigger_error('World!', E_USER_NOTICE);

?>
```

## See Also

+ [How to Convert PHP Errors, Notices & Warnings into Exceptions: Enhance Debugging Flow with set_error_handler](https://www.w3tutorials.net/blog/convert-errors-notices-warnings-into-exceptions/)

Related : [Try-catch](Try-catch), [trigger_error()](trigger_error()), [Exception](Exception), [PHP Handlers](PHP Handlers), [Exit](Exit), [display_errors](display_errors), [Error Reporting](Error Reporting)
