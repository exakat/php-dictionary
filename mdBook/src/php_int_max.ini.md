# PHP_INT_MAX
``PHP_INT_MAX`` is the largest integer that can be processed by PHP. 

Nowadays, ``PHP_INT_MAX`` is often 9223372036854775807. This value depends on the underlying machine: in particular, 64bits, machine and OS, have larger values of ``PHP_INT_MAX``, while 32bits have smaller. The hardware and the software have to be compatible to provide a larger value of ``PHP_INT_MAX``.

Beyond ``PHP_INT_MAX``, integers are often converted to floats, and loose precision. 

There is also ``PHP_INT_MIN``, which is the negative version of ``PHP_INT_MAX``, minus one.
```php
<?php

$max = PHP_INT_MAX;

var_dump(is_int($max)); // true

?>
```

## See Also

+ [PHP Integers Guide: Types, Limits, and Conversions](https://flatcoding.com/tutorials/php/php-int/)

Related : [integer](integer), [Floating Point Numbers](Floating Point Numbers), [PHP_INT_MIN](PHP_INT_MIN), [precision](precision)
