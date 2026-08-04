# For
``for()`` is a loop structure. It is configured with an initialization expression, an ending expression and an increment expression. 

The ``for()`` loop executes the init expression first, and only once. Then it executes the block, the increment and the ending. When the ending is false, it exits the loop.

The initialization, ending and increment expression may all host several instructions: they have to be separated by comma, rather than semi colons.

Part of the block execution may be skipped by using the ``continue`` keyword.
```php
<?php

/*
for(initialization; ending; increment) {
    block
}
*/

for($i = 0; $i < 10; ++$i) {
    print "$i\n";
}

for($i = 0, $j = 0; $i < 10; ++$i, $j += 2) {
    print "$i $j\n";  // 1 2, 2 4, 3 6....
}

?>
```

## See Also

+ [Stop using for loops and start showing intent](https://dev.to/rocksheep/stop-using-for-loops-and-start-showing-intent-3am0)
+ [PHP Loop: For, ForEach, While, Do While](https://www.guru99.com/php-loop.html)

Related : [Continue](Continue), [foreach()](foreach()), [Loops](Loops), [While](While), [Do While](Do While), [Control Flow](Control Flow), [Blind Variable](Blind Variable), [Control Structures](Control Structures), [Semicolon ;](Semicolon ;)
