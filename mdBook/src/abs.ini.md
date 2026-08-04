# abs()
``abs()`` calculates the absolute value of a number. It is the value itself, when the number is positive or zero, and it is the opposite of the number when the number is negative.

Almost all integers have an absolute value: the only exception is ``PHP_INT_MIN``. Its value is ``-9223372036854775808``, and the actual absolute value would be ``9223372036854775808``, which is bigger than ``PHP_INT_MAX``. 

``abs()`` takes ``float`` and ``int`` as types. Except for the exception above, giving a float to ``abs()`` produces a float, and giving it an integer, produces an integer. Other types are forbidden. Object have to be turned explicitly into a number.
```php
<?php

    $a = -2;
    print abs($a); // 2
    print abs(abs($a)); // 2

?>
```

Related : [Floating Point Numbers](Floating Point Numbers), [integer](integer), [Number](Number), [Absolute](Absolute)
