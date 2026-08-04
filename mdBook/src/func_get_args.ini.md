# func_get_args()
``func_get_args()`` is a native function that returns an array containing the function's argument list.

It is often used to handle a variable number of arguments in a function, especially before the introduction of the variadic operator ``...`` in version 5.6.

There are related functions: ``func_get_arg()``, which returns a specific argument from the list, and ``func_num_args()``, which returns the number of arguments passed to the function.
```php
<?php

    function foo() {
        $numargs = func_num_args();
        echo "Number of arguments: $numargs\n";
        if ($numargs >= 2) {
            echo "Second argument is: " . func_get_arg(1) . "\n";
        }
        $arg_list = func_get_args();
        for ($i = 0; $i < $numargs; $i++) {
            echo "Argument $i is: " . $arg_list[$i] . "\n";
        }
    }
    
    foo(1, 2, 3);

?>
```

## See Also

+ [https://www.geeksforgeeks.org/php/php-func_get_args-function/](https://www.geeksforgeeks.org/php/php-func_get_args-function/)

Related : [Variable Arguments](Variable Arguments), [Variadic](Variadic), [Arbitrary Number Of Argument](Arbitrary Number Of Argument), [Method Overloading](Method Overloading)
