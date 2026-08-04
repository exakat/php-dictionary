# Chaining Assignation
Chaining assignation is the ability to assign the same value to several variables in a single expression, using successive ``=`` operators.

The assignment is evaluated from right to left: the rightmost value is assigned first, then the result propagates leftward. Each ``=`` operator returns the assigned value, which becomes the operand of the next assignment.

Note that magic methods such as ``__set()`` and ``__get()`` are never called during chaining assignments. Writing ``$a = $obj->b = 8;`` will not trigger ``__set()`` on ``$obj``.
```php
<?php

    // Basic chaining assignation
    $a = $b = $c = 0;
    // $a, $b, $c are all 0
    
    // Right-to-left evaluation
    $x = ($y = 5) + 3;
    // $y is 5, $x is 8
    
    // Chaining with a function call
    $arr = $count = count([1, 2, 3]);
    // both $arr and $count are 3

?>
```

## See Also

+ [Operator Precedence](https://www.php.net/manual/en/language.operators.precedence.php)
+ [Hidden Traps with Chained Assignments](https://www.exakat.io/hidden-traps-with-chained-assignments/)

Related : [Assignment](Assignment), [__set() Method](__set() Method), [__get() Method](__get() Method), [Chaining](Chaining), [Chaining New Without Parenthesis](Chaining New Without Parenthesis)
