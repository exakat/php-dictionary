# Post-increment
Post-increment is the ``++`` operator, used on a variable, when it is placed after the variable. This means that the increment happens after the variable is read: in this case, the first echo displays 1, as the increment happens after the echo call. 

There is also a post-decrement, which uses the operator ``--``, and reduces the variable by 1.

Post-increment and post-decrement have a corresponding pre-increment and pre-decrement.
```php
<?php

    $a = 1;
    echo $a++; // displays 2
    echo $a;   // displays 2

?>
```

Related : [Pre-increment](Pre-increment), [Variables](Variables), [Increment](Increment), [one](one), [Double](Double), [Minus -](Minus -)
