# Assignations
Assignation refers to the process of assigning a value to a variable. It is a fundamental concept in programming that allows storing and manipulating data.

The main operator of assignation is ``=``. There are secondary operators, such as ``+=``, ``*=``, ``??=``, ... which are called short assignation: they apply a specific operation while assigning.

Finally, there are some inherent assignations: ``foreach()`` loops, method calls and ``list()`` operator perform assignations without an explicit operator.
```php
<?php

    $a = 'b';
    
    // $c is assigned by 
    foreach([1, 2, 3] as $c) {}
    echo $c; // $c is 3
    
    // list call that assigns values
    [$a, $b, $c] = ['a', 'b', 'C'];

?>
```

## See Also

+ [Assignment Operators Explained with Examples](https://softwarebhai.com/blog/php-assignment-operators)

Related : [Short Assignations](Short Assignations), [Overwrite](Overwrite), [Iffectation](Iffectation), [Short Syntax](Short Syntax)
