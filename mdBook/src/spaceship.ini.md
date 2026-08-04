# Spaceship Operator
Spaceship operator is an operator which reports if a value is larger, equal or smaller than another value. It return 1, 0 or -1 in each case, respectively. 

The spaceship operator may be replace by a ``-`` minus sign, if the compared values are correct. It may also be replace with ``!=``, since ``-1`` and ``1`` are both cast to ``true``. 

The spaceship operator got its name from its resemblance to an flying saucer. Battleship operator, or death star operator do not exist.
```php
<?php

    $a = 1;
    $b = 3;
    
    print $a <=> $b;

?>
```

## See Also

+ [Weird operators in PHP](https://www.exakat.io/en/weird-operators-in-php/)
+ [What Is the PHP Spaceship Operator?](https://www.designcise.com/web/tutorial/what-is-the-php-spaceship-operator)

Related : [Comparison](Comparison), [Comparison](Comparison), [Minus One -1](Minus One -1)
