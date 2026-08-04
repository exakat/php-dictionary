# Pipe Operator
The pipe operator is ``|>``. It chains calls from methods from left to right, using the result of the first method as the only argument of the next method.

The pipe operator is compatible with every form of PHP callable: string, arrays, first class callable, closures, arrow functions with parenthesis, etc. 

Pipe operator is not compatible with references. 

The pipe operator should not be mistaken with the ``|`` pipe logical operator, which combines two values with a ``or`` logic.
```php
<?php

    $result = abc |> trim(...) |> 'strtoupper'; // 'ABC'

?>
```

## See Also

+ [PHP 8.5: Pipe operator (|>)](https://php.watch/versions/8.5/pipe-operator)
+ [Introducing Piper: array and string manipulation with the pipe operator](https://spatie.be/blog/introducing-piper)
+ [My thoughts on Spatie/Piper](https://dev.to/xwero/my-thoughts-on-spatiepiper-1ej7)

Related : [Logical Operators](Logical Operators)
