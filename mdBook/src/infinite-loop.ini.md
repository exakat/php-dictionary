# Infinite Loop
An infinite loop never ends, unless there is an external event.

Infinite loops are usually not wanted, and should be avoided. They are prevented by PHP which enforces a ``max_execution_time`` or ``memory_limit`` error.
```php
<?php

// infinite loop while
while(true) { }

// infinite loop while
do { } while(1);

for(;;) {} 

?>
```

## See Also

+ [Infinite loops in PHP](https://www.exakat.io/infinite-loops-in-php/)

Related : [INF](INF), [Infinite](Infinite), [InfiniteIterator](InfiniteIterator), [max_execution_time](max_execution_time), [Return Value](Return Value)
