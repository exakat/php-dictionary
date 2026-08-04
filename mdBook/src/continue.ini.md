# Continue
``continue`` is used within looping structures to skip the rest of the current loop iteration and resume the execution at the condition evaluation and then the beginning of the next iteration.

``continue`` is not possible inside a ``switch()`` structure.
```php
<?php

    foreach ($arr as $key => $value) {
        if (!($key % 2)) { // skip even members
            continue;
        }
        do_something_odd($value);
    }

?>
```

Related : [Break](Break), [Control Flow](Control Flow), [Do While](Do While), [For](For), [foreach()](foreach()), [While](While), [Jump](Jump)
