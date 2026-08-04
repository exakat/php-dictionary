# Multiple Return Values
Some languages, such as Go and Lua, let a function return several values directly, separated by commas, without wrapping them in a container: ``func divide(a, b int) (int, int) { return a/b, a%b }``. The caller receives them individually, typically by assigning each to its own variable in one statement.

This differs from returning a single composite value such as a tuple or array, because the values are not boxed: the function's declared return arity is part of its signature, and the caller can discard trailing values it does not need.

PHP functions return exactly one value. Returning several values requires wrapping them in an array, a tuple-like list, or an object, and then destructuring the result with list assignment: ``[$q, $r] = divmod($a, $b);``. The array is a real value that exists at runtime, is allocated like any other array, and the ``return`` statement itself only ever returns that one array.
```php
<?php

    function divmod(int $a, int $b): array {
        return [intdiv($a, $b), $a % $b];
    }
    
    [$quotient, $remainder] = divmod(7, 2);

?>
```

## See Also

+ [Return statement in Wikipedia](https://en.wikipedia.org/wiki/Return_statement)

Related : [Return](Return), [List](List), [Tuple](Tuple), [Array, []](Array, [])
