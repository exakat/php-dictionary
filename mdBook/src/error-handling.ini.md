# Error Handling
Error handling is a broad concept that covers the different ways that PHP uses to signal that an error occurred. 

The main systems are the error reporting, and the exceptions. 

The error reporting is often associated with native errors, although it is possible to raise them and handle them with error-handlers.

The exception system is based on the throw, try and catch keywords.
```php
<?php

    trigger_error('Cannot do this', E_USER_ERROR);
    
    try {
        throw new Exception('Cannot do this');
    } catch (Exception $e) {
        print $e->getMessage();
    }

?>
```

## See Also

+ [PHP Error Handling and Exceptions: Best practices for robust applications](https://roman-huliak.medium.com/php-error-handling-and-exceptions-best-practices-for-robust-applications-c02cf5e225f7)

Related : [Exception](Exception), [Error Handler](Error Handler), [Downtime](Downtime), [Fatal Error](Fatal Error), [Rollback](Rollback), [Troubleshoot](Troubleshoot), [Error Suppression](Error Suppression)
