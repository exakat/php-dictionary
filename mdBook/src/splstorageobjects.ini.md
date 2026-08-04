# SplStorageObjects
The ``SplObjectStorage`` class provides a list for objects: it may also the values with the same object, making it an efficient object set.
```php
<?php

    // As an object set
    $s = new SplObjectStorage();
    
    $o1 = new stdClass;
    $o2 = new stdClass;
    $o3 = new stdClass;
    
    $s->attach($o1);
    $s->attach($o2);
    
    var_dump($s->contains($o1)); // true
    var_dump($s->contains($o2)); // true
    var_dump($s->contains($o3)); // false

?>
```

## See Also

+ [SplObjectStorage Class](https://medium.com/@vishwa.chikate/php-splobjectstorage-class-530ff5b5aab7)

Related : [Object](Object), [SplObjectStorage](SplObjectStorage), [Weakmap](Weakmap)
