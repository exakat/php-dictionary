# zero
Zero is the ``0`` integer. Zero is part of the falsy values: it is the equivalent of ``false``. 

It is often used to return successful execution, where non-zero answers are unsuccessful execution, represented by their error message.

Adding 0 to a string turns it into an integer, just like the cast operator ``(int)`` does.

Comparisons between 0 and other falsy values, such as empty string ``''`` changed with PHP 8.0: it was true and became false.

Division by zero emits the ``DivisionByZeroError``, as that operation is impossible. Multiplication is possible and always returns 0.

0 is one of the two valid index when building a callback with an array, along with 1.

0 is a classic magic number, although it has so many uses that it is usually look over, as generating too many false positives or scattered issues.
```php
<?php

    $zero = 0;
    
    $four = 4 + 0;

?>
```

## See Also

+ [What is the origin of Zero?](https://www.scientificamerican.com/article/what-is-the-origin-of-zer/)

Related : [False](False), [Comparison](Comparison), [DivisionByZeroError](DivisionByZeroError), [Empty String](Empty String), [one](one), [Callable Arrays](Callable Arrays), [Array Callback](Array Callback), [Minus One -1](Minus One -1), [Truthy](Truthy), [ArithmeticError Error](ArithmeticError Error), [Logarithm](Logarithm), [zend\.assertions](zend\.assertions)
