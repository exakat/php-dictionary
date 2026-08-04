# Exponential
The exponential is a mathematical function. It satisfies the expressions: ``exp($a + $b) = exp($a) * exp($b)``, and ``exp(0) === 1``.

There is a special ``expm1()`` function, which calculates the exponential value of ``$x - 1``. When ``$x`` is close to 0, this function provides more siginficant digits than using the expression ``exp($x) - 1``.

Exponential calculations may also be lead with the constant ``M_E`` and the operator ``**`` or the function ``pow()``, although there is a slight difference.
```php
<?php

    $e = exp(1); // also known as the contant M_E
    
    var_dump(exp(2) === M_E ** 2); // false
    var_dump(exp(2) - M_E ** 2);   // float(8.881784197001252E-16)

?>
```

## See Also

+ [PHP Math Functions: A Comprehensive Guide with Examples](https://codingeasypeasy.com/blog/php-math-functions-a-comprehensive-guide-with-examples/)

Related : [Exponent](Exponent), [Exponent](Exponent), [E](E), [Logarithm](Logarithm), [sqrt()](sqrt()), [Star *](Star *)
