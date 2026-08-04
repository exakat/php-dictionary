# Underflow
Underflow happens when a value goes below a limit: out of its range of existence, the behavior of the value is now unknown.

Underflow happens with integers, which are limited from ``PHP_INT_MIN`` to ``PHP_INT_MIN``, floats, which are limited from ``PHP_FLOAT_MIN`` to ``PHP_FLOAT_MAX``. 

Other situations, such as accessing an array element or a string character beyond its first element, defaults to returning ``null``.
```php
<?php

    $a = PHP_INT_MAX;
    $b = (int) ($a +  1);
    
    echo $a.PHP_EOL;
    echo $b;

?>
```

## See Also

+ [PHP-FPM Underflow RCE](https://www.rapid7.com/db/modules/exploit/multi/http/php_fpm_rce/)
+ [Integer Underflow](https://secdim.com/lab/integer-underflow/php/)

Related : [Null](Null), [Overflow](Overflow), [RangeException](RangeException)
