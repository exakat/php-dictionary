# Chaining Exceptions
Chaining exception is throwing again a caught exception, with a new type, and with the previous exception. 

To provide the previous exception to a new exception, use the third parameter of the ``Exception`` constructor. Also, always provide a third argument to custom exceptions.

The previous exception is available with the ``Exception::getPrevious()`` method of the ``Exception`` class.
```php
<?php

class myException extends \Exception {
    function __construct(string $message, $code, \Throwable $exception) {
        parent::__construct($message, $code, $exception);
    }
}

try {
    doSomething();
} catch(\Exception $e) {
    // chaining exception
    throw new myException('doSomething failed', 0, $e);
}

?>
```

## See Also

+ [Best practices for PHP exception handling](https://moxio.com/blog/best-practices-for-php-exception-handling/)

Related : [throw](throw), [Try-catch](Try-catch), [Exception](Exception), [Chaining](Chaining)
