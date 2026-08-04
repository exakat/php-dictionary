# Minus -
``-`` is a native PHP operator, which allows to do subtraction on numbers, both integer and decimals, or produce the opposite of a number.

``-`` silently triggers a conversion to number, preferably integers, but otherwise decimal. It may produce a warning or a fatal error, if this is not possible.

It may also be repeated, with the pre- and post- increment operators.

It is the contrary to ``+``.
```php
<?php

$a = 2 - 1; // 1

$a = -$a; // -1
$a = -$a; //  1

--$a; // 0
$a--; // -1 

?>
```

Related : [Plus +](Plus +), [Pre-increment](Pre-increment), [Post-increment](Post-increment), [Sign](Sign)
