# Batch
Batch processing refers to the treatment of several items at the same time, instead of one at a time.

Batch may mean all at the same time, or it may refers to processing the elements in several small groups. 

Processing in batch is efficient when the overhead of an operation is high per unit, such as storing one row at a time in a database, or when processing everything at once requires too much resources.

Processing in intermediate size batch may also be more efficient than processing everything by unit, or as a whole. It is related to the problem of ``the elephpant and the bananas``.
```php
<?php

    // Processing the array one by one
    foreach($array as $a) {
        $database->store($a);
    }
    
    // Processing the array in one time
    $database->store($array);
    
    // Processing the array by batch of 10
    $chunks = array_chunk($array, 10);
    foreach($chunks as $chunk) {
        $database->store($chunk);
    }

?>
```

## See Also

+ [The Elephant and the Bananas](https://puzzlesquant.substack.com/p/the-elephant-and-the-bananas)

Related : [Dataset](Dataset), [N+1 Query Problem](N+1 Query Problem)
