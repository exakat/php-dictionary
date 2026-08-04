# Binary Integer
Integers can be specified in binary, or base 2, notation. Binary integer syntax starts with the prefix ``0b`` and only contains 0 and 1.

Binary integers may be specified as positive or negative. Their size may become very long, and yet, eventually, produce a integer. They may have leading ``0``, after the prefix ``0b``.

Binary format exists only at compilation time: at execution time, the integer is in decimal form and has no hint that it was input as an binary number.

Binary numbers are integers until ``PHP_INT_MAX``. Beyond that, they are cast into a decimal number, ``float``, and eventually, are returned as ``INF``.

It is possible to use ``decbin()`` and ``sprintf()``, related functions to produce a string representation in the binary format.

```php
<?php

    // 12
    $binary = 0b1100;
    
    // On a 32bit machine (double the size for 64bits one)
    $binary = 0b1111111111111111111111111111111;

?>
```

Related : [sprintf](sprintf), [integer](integer), [Binary](Binary), [Hexadecimal Integer](Hexadecimal Integer), [Octal Integer](Octal Integer)
