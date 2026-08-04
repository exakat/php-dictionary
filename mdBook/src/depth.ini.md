# Depth
Depth is a measure of how many an operation has been repeatedly applies, over and over. 

It applies to several concepts: 

+ Multi-dimensional array depth: ``$array['d1']['d2']['d3']['d4']``
+ Recursion depth: see example
+ Nested loop depth: number of loops inside a loop
+ Callstack depth: number of functions calling another one
+ Object inheritance depth: the maximum number of extension levels in a class hierarchy

Depth might be limited, when it is prevented from going beyond a certain level, or unlimited, when there is no such limit. For example, xdebug offers a directive called ``xdebug.max_nesting_level`` that limits nesting depth.
```php
<?php

    // The recursion depth is limited to 5
    function foo($level = 0) { 
        if ($level < 5) { 
            return foo($level + 1);
        } 
        return 1;
    }

?>
```

Related : [Callstack](Callstack)
