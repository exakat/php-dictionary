# sqrt()
``sqrt()`` is a PHP native function, that computes the square root of a number. That function takes a integer or a float, and returns the same types, depending on the actual value of the result.

``sqrt()`` is not a particularly slow function. The opposite of ``sqrt()`` is ``** 2``, or ``pow($x, 2)``, or even ``$x * $x``, where ``$x`` is the result of ``sqrt()``.
```php
<?php

    $a = 4;
    var_dump(sqrt($a));
    
    $b = 5;
    var_dump(sqrt($b));

?>
```

## See Also

+ [PHP Math Functions: Understanding the Basics](https://wpshout.com/php-math-functions/#gref)

Related : [Exponent](Exponent), [Exponential](Exponential), [hypot()](hypot())
