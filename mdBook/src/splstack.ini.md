# SplStack
The ``SplStack`` class is part of the Standard PHP Library, SPL. It provides a stack data structure, Last‑In, First‑Out or LIFO, by extending ``SplDoublyLinkedList`` and setting the iteration mode to treat the list as a stack.
```php
<?php

    $q = new SplStack();
    $q[] = 1;
    $q[] = 2;
    $q[] = 3;
    foreach ($q as $elem)  {
     echo $elem.\n;
    }

?>
```

Related : [SplDoublyLinkedList](SplDoublyLinkedList), [Last In, First Out (LIFO)](Last In, First Out (LIFO)), [Datastack](Datastack), [Data Structure](Data Structure), [Pop](Pop)
