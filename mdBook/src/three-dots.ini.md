# Three Dots
Three dots, is an operator with several usages and names.

+ Variadic, to make the last parameter collect all arguments in an array
+ Spread, to expand elements of an array into arguments positions
+ Spread in array, to merge several arrays in one
+ Closure creator, when used standalone in a methodcall.

The various features of this operator were introduced in different PHP versions.
```php
<?php

$a = [2, 3];
// equivalent to [1, 2, 3], or array_merge([1], $a);
$array = [1, ...$a];

// spread operator, in function call
// same as foo(0, 1, 2, 3);
foo(0, ...$array);

// variadic argument (the last one)
function foo($special, ...$others) {
    // with the above call
    // $special === 0
    // $others === [1, 2, 3, 4]
}

// PHP 8.1
$closure = strlen(...);
echo $closure('Ab'); // display 2, by calling strlen

?>
```

## See Also

+ [The many uses of ... ellipsis operator in PHP](https://www.amitmerchant.com/the-many-uses-of-ellipsis-operator-in-php/)
+ [Variadic Function in PHP](https://medium.com/@sharminshanta/variadic-function-in-php-5e16c36c2727/)

Related : [Variable Arguments](Variable Arguments), [Array Spread](Array Spread), [Ellipsis](Ellipsis), [First Class Callable](First Class Callable)
