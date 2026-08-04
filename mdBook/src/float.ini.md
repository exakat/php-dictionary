# Floating Point Numbers
Floating point numbers, also known as ``floats``, ``doubles``, or ``real numbers``, can be specified using a decimal dot and a mantis.

They may also use a number separator ``_``: it may be placed anywhere between two digits, to help make the number more readable.

Floats used to be called ``real``, though this was abandoned progressively, since PHP 7.0.
```php
<?php

    $a = 1.234; 
    $b = 1.2e3; 
    $c = 7E-10;
    $d = 1_234.567; // as of PHP 7.4.0

?>
```

## See Also

+ [Floating Dangers in PHP](https://medium.com/@dotcom.software/floating-dangers-in-php-c4a2220bd8dc)
+ [Floating Point Math](https://0.30000000000000004.com/)
+ [Comparing float value in PHP](https://www.geeksforgeeks.org/comparing-float-value-in-php/)

Related : [Real Numbers](Real Numbers), [Addition](Addition), [Multiplication](Multiplication), [Not A Number (NAN)](Not A Number (NAN)), [PHP_INT_MAX](PHP_INT_MAX), [PHP_INT_MIN](PHP_INT_MIN), [Scalar Types](Scalar Types), [Sign](Sign), [abs()](abs()), [PHP Natives](PHP Natives), [Numeric Separator](Numeric Separator), [precision](precision), [Double](Double), [Logarithm](Logarithm), [Non-numeric](Non-numeric), [Number](Number), [Readable](Readable), [E](E), [Math](Math), [serialize_precision](serialize_precision)
