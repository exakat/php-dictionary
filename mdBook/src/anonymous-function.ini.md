# Anonymous Function
A function may be instantiated, without defining a function name. Such functions are called anonymous. 

Anonymous functions are defined as closures or arrow functions. They may also be created based on existing methods and functions, with the ``...`` operator.

Even without names, they are usable like functions, or as callable.

Methods cannot be anonymous, but it is possible to call a method without mentioning its name by using the ``__invoke`` magic method.

```php
<?php

    $closure = function () {} ; 

    $arrowFunction = fn() => 1;
    
    $fcs = strlen(...);

?>
```

## See Also

+ [Anonymous functions in PHP](https://drops-of-php.hi-folks.dev/04-functions/01-fns-anonymous/)

Related : [Closure](Closure), [Arrow Functions](Arrow Functions), [First Class Callable](First Class Callable), [Closure](Closure), [Anonymous](Anonymous), [Arrow Functions](Arrow Functions), [__invoke() Method](__invoke() Method), [Custom Function](Custom Function), [Functions](Functions), [Lexical Variable](Lexical Variable)
