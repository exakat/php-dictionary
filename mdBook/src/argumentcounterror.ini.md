# ArgumentCountError
``ArgumentCountError`` is thrown when too few arguments are passed to a user-defined or PHP native function or method. This is an error, not an exception.

No exception is raised for extra parameters, as those may still be processed by the method itself.
```php
<?php

function foo($a) {}

// No error is raised here
foo(1,2);

// ArgumentCountError is catchable
try {
    foo();
} catch (ArgumentCountError) {
    print 'No enough parameters passed.';
}
?>
```

## See Also

+ [Tutorial: Solve PHP uncaught ArgumentCountError: Too few arguments to function](https://www.bestwebframeworks.com/tutorials/php/153/solve-php-uncaught-argumentcounterror-too-few-arguments-to-function/)

Related : [throw](throw), [Try-catch](Try-catch)
