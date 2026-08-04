# Arbitrary Number Of Argument
PHP allows any number of arguments to be passed to a functioncall. In the function definition, receiving those arguments means managing an arbitrary number of parameters. 

This is achieved with the variadic operator, or with functions such as ``func_get_args()``.

They are also called variable argument lists.

When the arguments are dynamic, aka they are collected at execution time, the operator variadic or the function ``call_user_func_array()`` turns an array to arguments.
```php
<?php

    function foo(...$args) {
        print "This function is called with ".count($args)." arguments\n";
        print "This function is called with ".func_get_count()." arguments\n";
        print "This function is called with ".count($func_get_args())." arguments\n";
    } 
    
    $array = range(0, rand(5, 10)); // generates an array with 1 to 11 elements
    
    foo(...$array);
    call_user_func_array('foo', $array);

?>
```

## See Also

+ [Variadic functions via ...](https://www.php.net/manual/en/migration56.new-features.php#migration56.new-features.variadics)

Related : [Variadic](Variadic), [func_get_args()](func_get_args())
