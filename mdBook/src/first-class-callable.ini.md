# First Class Callable
First Class Callable Syntax is a new feature that creates a closure directly from a function, by using the triple dot operator as an argument.

First class callable may be used on functions, closures, arrow functions and methods and static methods.

The number of arguments is not important: it is the same as the actual definition of the underlying method, and will be checked at call time only.

Such closure may be created using any kind of function, such as native PHP function, or library methods.
```php
<?php

    $a = foo(...);
    
    $function = strtolower(...);
    
    $closure = X::staticMethod(...);

?>
```

## See Also

+ [PHP's First-Class Callable Syntax](https://dev.to/damms005/phps-first-class-callable-syntax-1kjl)

Related : [Functions](Functions), [Closure](Closure), [Anonymous Function](Anonymous Function), [Arrow Functions](Arrow Functions), [Arrow Functions](Arrow Functions), [Closure](Closure), [Custom Function](Custom Function), [Three Dots](Three Dots)
