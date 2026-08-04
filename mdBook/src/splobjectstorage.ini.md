# SplObjectStorage
``SplObjectStorage`` provides a map from objects to arbitrary data, or a set of objects. Objects are used as keys, so each object appears only once. The associated data slot is optional.

It is commonly used to manage observers in the Observer pattern, to associate metadata with objects without modifying them, and as an object-keyed dictionary.
```php
<?php

    $storage = new SplObjectStorage();
    
    $obj1 = new stdClass();
    $obj2 = new stdClass();
    
    $storage->attach($obj1, 'data for obj1');
    $storage->attach($obj2, 'data for obj2');
    
    foreach ($storage as $object) {
        echo $storage->getInfo() . PHP_EOL;
    }

?>
```

Related : [Standard PHP Library (SPL)](Standard PHP Library (SPL)), [Data Structure](Data Structure), [Collection](Collection), [Object](Object), [Iterator](Iterator), [SplStorageObjects](SplStorageObjects), [SplSubject](SplSubject)
