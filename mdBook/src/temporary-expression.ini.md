# Temporary Expression
A temporary expression is an expression which is used on the spot, and it is not stored in a variable, or a container for later reuse. 

The storage in a variable confers certain feature to the resulting value, while an anonymous expression cannot use them. For example, ``array_pop()`` extracts the last value in an array, but reduces that array by one, which makes no sense outside a variable.
```php
<?php

    // object x is created, assigned a new value to its 'p' property, then never stored anywhere. 
    (new x)->p = 2;
    
    // x = 3 (constant assignation) would yield a syntax error
    // on the other hand, x[3] is a temporary expression, used for reading, but not available for writing.
    x[3] = 3;

    // x is again a constant, and it may be an object since PHP 8.4
    x->p = 4;

?>
```

Related : [Expression](Expression)
