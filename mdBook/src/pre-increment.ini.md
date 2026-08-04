# Pre-increment
Pre-increment is the ``++`` operator, used on a variable, when it is placed before the variable. This means that the increment happens before the variable is read: in this case, the first echo displays 2, as the increment happens before the echo call. 

There is also a pre-decrement, which uses the operator ``--``, and reduces the variable of 1. 

Pre-increment and pre-decrement have a corresponding post-increment and post-decrement.
```php
<?php

$a = 1;
echo ++$a; // displays 2
echo $a;   // displays 2

?>
```

## See Also

+ [Understanding the Increment and decrement operators in PHP](https://flatcoding.com/tutorials/php/increment-and-decrement-operators-in-php/)
+ [Useless post increment/decrementPHP-W1090](https://deepsource.com/directory/php/issues/PHP-W1090)

Related : [Post-increment](Post-increment), [Variables](Variables), [Increment](Increment), [Double](Double), [Minus -](Minus -)
