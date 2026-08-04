# Numeric Base
The numeric base is the number of digits to be used when counting. The most common bases are: binary 0 and 1, octal 0 to 7, decimal 0 to 9, duodecimal 0 to 11, hexadecimal 0 to F, aka 15.

All other bases, starting from 2, are possible.

In computer science, base 2, 10 and 16 are quite common, and require conversion from one another.
```php
<?php

    $number = '1234';
    echo base_convert($number, 10, 8);  // 2322
    echo base_convert($number, 10, 12); // 86a
    echo base_convert($number, 10, 16); // 4d2

?>
```

## See Also

+ [How to interact with Number Systems and Encoding Schemes in PHP](https://oliverlundquist.com/2025/04/06/encoding-schemes-in-php.html)

Related : [integer](integer), [Base](Base), [Leading Zero Means Octal](Leading Zero Means Octal)
