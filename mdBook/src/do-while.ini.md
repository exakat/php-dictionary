# Do While
Do While is a loop structure. It runs the block of code until the condition is not met anymore. The block is run once before the condition is checked, so it is always run at least once.

Part of the block execution may be skipped by using the ``continue`` keyword.
```php
<?php

    $i = 1;
    do {
        print "$i\n";
    } while($i < 10);

?>
```

Related : [Continue](Continue), [foreach()](foreach()), [Loops](Loops), [For](For), [While](While), [Control Flow](Control Flow)
