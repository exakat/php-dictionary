# DivisionByZeroError
The ``DivisionByZeroError`` exception is thrown when an attempt is made to divide a number by zero. It is never possible to divide by zero, the result is undefined. It is true for all zeroes: ``0``, ``+0``, ``-0``.
```php
<?php

    try {
        echo 1 / $a;
    } catch(DivisionByZeroError $e){
        echo 'Trying to divide by 0';
    }

?>
```

Related : [Error](Error), [ArithmeticError Error](ArithmeticError Error), [Division](Division), [zero](zero)
