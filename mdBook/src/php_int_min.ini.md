# PHP_INT_MIN
``PHP_INT_MIN`` is the smallest integer that can be processed by PHP. 

Nowadays, ``PHP_INT_MIN`` is often -9223372036854775808. This value depends on the underlying machine: in particular, 64 bits, machine and OS, have larger absolute values of ``PHP_INT_MIN``, while 32 bits have smaller. The hardware and the software have to be compatible to provide a larger absolute value of ``PHP_INT_MIN``.

Beyond ``PHP_INT_MIN``, integers are often converted to floats, and loose precision. 

There is also ``PHP_INT_MAX``, which is the positive version of ``PHP_INT_MIN``, minus one.
```php
<?php

$max = PHP_INT_MIN;

var_dump(is_int($max)); // true

?>
```

## See Also

+ [PHP Integers Guide: Types, Limits, and Conversions](https://flatcoding.com/tutorials/php/php-int/)

Related : [integer](integer), [Floating Point Numbers](Floating Point Numbers), [PHP_INT_MAX](PHP_INT_MAX), [precision](precision)
