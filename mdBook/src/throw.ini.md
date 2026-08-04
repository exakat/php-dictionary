# throw
Throw is the keyword which raise an exception. 

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

## See Also

+ [Exceptions - PHP Advance](https://jobtensor.com/Tutorial/PHP/en/Exceptions)

Related : [Try-catch](Try-catch), [Exception](Exception), [ArgumentCountError](ArgumentCountError), [ArithmeticError Error](ArithmeticError Error), [Error](Error), [Chaining Exceptions](Chaining Exceptions), [mysqli_sql_exception](mysqli_sql_exception), [PHP Predefined Exception](PHP Predefined Exception), [Jump](Jump), [Method Compatibility](Method Compatibility), [Return Value](Return Value)
