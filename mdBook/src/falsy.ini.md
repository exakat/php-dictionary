# Falsy
A falsy value is a value that evaluate to false, when cast to a boolean. It includes false, obviously, but also other values such as 0, ``''``, the empty string, or ``[]``, the empty array.

The contrary to falsy is truthy. 

There are some falsy values which are difficult to guess, as is illustrated below.
```php
<?php

var_dump((bool) 0);       // false
var_dump((bool) '');      // false
var_dump((bool) '0');     // false
var_dump((bool) '00');    // true
var_dump((bool) []);      // false
var_dump((bool) [null]);  // true
var_dump((bool) null);    // false

?>
```

## See Also

+ [Truthy and Falsy in PHP](https://www.thisprogrammingthing.com/2021/Truthy-and-Falsy/)
+ [PHP Tricky True False Examples](https://medium.com/@waqar-ahmed/php-tricky-true-false-examples-6d94c1db59a2)

Related : [Truthy](Truthy), [False](False), [Boolean](Boolean), [Empty String](Empty String)
