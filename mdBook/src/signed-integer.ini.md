# Signed Integer
PHP integers are always signed: they use one bit to represent the sign, allowing both negative and positive values. PHP does not support unsigned integers.

On a 64-bit platform, a PHP integer spans from ``PHP_INT_MIN``, aka -9,223,372,036,854,775,808, or -2^63 to ``PHP_INT_MAX``, aka 9,223,372,036,854,775,807, or 2^63 - 1. On a 32-bit platform, the range is -2^31 to 2^31 - 1.

When an operation would produce a value outside that range, PHP silently promotes the result to a ``float``, which has a larger range but reduced precision for large integers.

Languages such as C or Rust distinguish signed integers ``int``, ``i64`` from unsigned integers ``uint``, ``u64``. PHP makes no such distinction: all integers are signed.
```php
<?php

    $max = PHP_INT_MAX; // 9223372036854775807
    $min = PHP_INT_MIN; // -9223372036854775808
    
    // Overflow promotes to float silently
    $overflow = PHP_INT_MAX + 1; // float(9.2233720368548E+18)
    
    var_dump($overflow); // float, not integer

?>
```

Related : [integer](integer), [Sign](Sign), [Positive Integer](Positive Integer), [PHP_INT_MAX](PHP_INT_MAX), [PHP_INT_MIN](PHP_INT_MIN), [Floating Point Numbers](Floating Point Numbers), [Overflow](Overflow)
