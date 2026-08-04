# Try-catch
Try-catch is a PHP command, which run a block of code, and catch some configured exceptions that the block may throw. It may be completed with a finally block.

The catch clause may be anonymous, when it only specify the type of caught exception, without providing a variable name.

```php
<?php

try {
    callSomeMethod();
} catch (\Exception $e) {
    // process the error here
}

?>
```

## See Also

+ [PHP: Try and Catch me if you can!](https://medium.com/@erlandmuchasaj/php-try-and-catch-me-if-you-can-824bc6bb6698)
+ [How to Implement Try Catch Finally Blocks in PHP](https://rollbar.com/blog/php-try-catch-finally/)
+ [A PHP Pattern To Avoid Try/Catch Blocks Repetition](https://medium.com/better-programming/a-php-pattern-to-avoid-try-catch-blocks-repetition-1e3fe2038dc1)

Related : [Finally](Finally), [Anonymous Catch](Anonymous Catch), [ArgumentCountError](ArgumentCountError), [ArithmeticError Error](ArithmeticError Error), [Catch](Catch), [Error](Error), [Chaining Exceptions](Chaining Exceptions), [Exception Handler](Exception Handler), [Exception](Exception), [mysqli_sql_exception](mysqli_sql_exception), [PHP Predefined Exception](PHP Predefined Exception), [throw](throw), [Fatal Error](Fatal Error), [Resource Leak](Resource Leak)
