# INF
Infinite is a PHP constant, called ``INF``. It is also possible to generate such a value, with calls to math functions such as ``log(0)`` or ``1e308 * 2``.

While the infinite is a float, it is possible to test a number with ``is_infinite()``.
```php
<?php

$infinite = 1e308 * 2;

var_dump(is_infinite($infinite)); // true 

var_dump(INF === $infinite);      // true 

echo str_repeat('1', 1000) + 0;  // INF

?>
```

## See Also

+ [is_infinite()](https://www.php.net/manual/en/function.is-infinite.php)

Related : [Infinite](Infinite), [ArithmeticError Error](ArithmeticError Error), [E](E), [Infinite Loop](Infinite Loop), [Non-numeric](Non-numeric), [Math](Math)
