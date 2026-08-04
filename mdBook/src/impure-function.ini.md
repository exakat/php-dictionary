# Impure Function
An impure function is a function that has at least one of the following characteristics: 

+ Non-deterministic: for the same input, an impure function may return different output. For example, ``date()`` and ``random_string()`` return different values for each call, by definition. 
+ Create side-effect: an impure function modify a state: a global variable, a row in a table, a lock, a file or data. This may affect any subsequent call to this function, leading to the previous characteristic. 

A function that is not impure is a pure function. 

This notion applies to functions, methods, native and custom functions, closures and arrow functions. 

```php
<?php

    echo random_string(0, 10);
    
    // an impure function: 
    // the static variable is a state that changes over time
    function foo() {
        static $x = 0;
        
        return $x++;
    }

?>
```

## See Also

+ [Pure vs Impure Functions in Functional Programming – What's the Difference?](https://www.freecodecamp.org/news/pure-function-vs-impure-function/)

Related : [Functions](Functions), [Method](Method), [Return](Return), [Determinism](Determinism), [Side Effect](Side Effect), [Pure Function](Pure Function)
