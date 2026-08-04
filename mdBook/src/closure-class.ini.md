# Closure Class
``Closure`` is a PHP native class that is the result of the closure syntax. It is also the result of an arrow function syntax, and a call to first class callable. 

The ``Closure`` class offers methods to call the closure, bind it to new objects, or create more, from a callable.
```php
<?php

$closure = function ($a) use ($b) {
    return $a + $b + 1;
};
var_dump($closure);

$arrowFunction = fn () => 1;
var_dump($arrowFunction);

$firstClassCallable = strtolower(...);
var_dump($firstClassCallable);

?>
```

## See Also

+ [Closures in PHP](https://medium.com/@serhii.shkarupa/closures-in-php-54f18b2f9dc1)

Related : [Closure](Closure)
