# Jump
A jump typically refers to any non-linear control flow, where the program skips from one part of the code to another. In fact, it is bypassing the normal sequential execution.

There are a few constructs that qualify as jumps: ``goto``, ``break``, ``continue``, ``yield``, ``yield from``, ``throw``, ``return``.
```php
<?php

    function foo(int $a) {
        // jumps out of the method
        if ($a > 10) { return; }
        
        foreach(range(1, 10) as $i) {
            if (doSomething($i, $a)) {
                // jumps out of the loop
                break 1; 
            }
        }
        
        // normal execution
        return $a + 1;
    }

?>
```

Related : [Goto](Goto), [Return](Return), [Break](Break), [Continue](Continue), [throw](throw), [Control Flow](Control Flow), [If Then Else](If Then Else), [yield from Keyword](yield from Keyword), [Yield](Yield)
