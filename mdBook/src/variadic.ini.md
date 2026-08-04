# Variadic
Three dots, aka ellipsis, is an operator to spread or collect array values. 

Applied to an array, it spreads the values of the array as distinct elements.

Used in a function signature, it collects all the values into one array.

```php
<?php

$array = [1, 2, 3];

// same as foo(0, 1,2, 3);
foo(0, ...$array);


function foo($special, ...$others) {
    // with the above call
    // $special === 0
    // $others === [1, 2, 3, 4]
}

?>
```

## See Also

+ [Variadic Function in PHP](https://dev.to/sharminshanta/variadic-function-in-php-49c1)

Related : [Variable Arguments](Variable Arguments), [Array Spread](Array Spread), [Ellipsis](Ellipsis), [Unpacking](Unpacking), [Unpacking](Unpacking), [Arbitrary Number Of Argument](Arbitrary Number Of Argument), [func_get_args()](func_get_args()), [Wildcard](Wildcard)
