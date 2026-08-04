# Number
A number is either a float or an integer. 

Numbers are always signed. They are limited, in range, by the constants ``PHP_INT_MAX``, ``PHP_INT_MIN``, and ``PHP_FLOAT_MAX``, ``PHP_FLOAT_MIN``.

PHP also has a concept of numeric strings, which are strings that hold numbers. Other types do not have direct conversion to numbers and need to be converted or cast.
```php
<?php

    echo 1;
    echo -1.5;
    
    echo PHP_INT_MAX; 

?>
```

## See Also

+ [PHP Numbers Basics](https://www.codeguage.com/v1/courses/php/numbers-basics)
+ [PHP Numbers Explained](https://www.pixemweb.com/php/php-numbers/)
+ [Exploring Number Manipulation in PHP](https://medium.com/@philippebeck/exploring-number-manipulation-in-php-e51c85b44630)

Related : [Floating Point Numbers](Floating Point Numbers), [integer](integer), [Numeric String](Numeric String), [Cast Operator](Cast Operator), [abs()](abs())
