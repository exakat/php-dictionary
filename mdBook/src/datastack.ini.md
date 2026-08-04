# Datastack
A data stack is a LIFO data structure: the last data added to the stack is the first to get out.

A data stack may be implemented with an array, and the ``array_push()``, or ``$array[]`` operator, and the ``array_pop()`` functions. 

There is also a class called ``SplStack``, in the ``spl`` extension, and ``Ds\Stack`` in the ``ds`` extension.
```php
<?php

    $stack = [];
    $stack[] = first;
    $stack[] = second;
    // same as array_push($stack, second);
    
    echo array_pop($stack); // Outputs: second

?>
```

## See Also

+ [Ds\Stack](https://www.php.net/manual/en/class.ds-stack.php)

Related : [SplStack](SplStack), [Data Structure](Data Structure), [Standard PHP Library (SPL)](Standard PHP Library (SPL)), [Last In, First Out (LIFO)](Last In, First Out (LIFO)), [Deque](Deque), [Queue](Queue), [Stack](Stack)
