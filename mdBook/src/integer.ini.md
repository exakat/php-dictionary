# integer
An integer, or ``int`` is a number of the set ℤ = ``{..., -2, -1, 0, 1, 2, ...}``. It is limited by ``PHP_INT_MIN``, the lower bound, and ``PHP_INT_MAX``, the upper bound. 

Integers have several syntaxes: they may be written in binary, octal, decimal, hexadecimal and with ``_`` as a separator.
```php
<?php

    $a = 1234;       // decimal number
    $a = 0123;       // octal number (equivalent to 83 decimal)
    $a = 0o123;      // octal number (as of PHP 8.1.0)
    $a = 0x1A;       // hexadecimal number (equivalent to 26 decimal)
    $a = 0b11111111; // binary number (equivalent to 255 decimal)
    $a = 1_234_567;  // decimal number (as of PHP 7.4.0)

?>
```

## See Also

+ [PHP Integers](https://www.tutorialkart.com/php/php-integer/)

Related : [Addition](Addition), [Binary Integer](Binary Integer), [Multiplication](Multiplication), [Numeric Separator](Numeric Separator), [Octal Integer](Octal Integer), [Scalar Types](Scalar Types), [Sign](Sign), [PHP_INT_MAX](PHP_INT_MAX), [PHP_INT_MIN](PHP_INT_MIN), [Positive Integer](Positive Integer), [precision](precision), [abs()](abs()), [Number](Number), [Numeric Base](Numeric Base), [Rounding](Rounding), [Leading Zero Means Octal](Leading Zero Means Octal), [Math](Math)
