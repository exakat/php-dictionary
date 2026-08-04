# Weakmap
``WeakMap`` is a special object type: it is a map, or key–value storage, where the keys are objects and the stored values are automatically removed when the object key is no longer referenced anywhere else in your program.

``WeakMap`` may be considered as an associative array, where the keys must be objects. It also doesn't prevent objects from being garbage-collected.

``WeakMap`` was introduced in version 8.0.
```php
<?php

    $weakMap = new WeakMap();
    
    $obj = new stdClass();
    $weakMap[$obj] = 'some data';
    
    echo $weakMap[$obj]; // some data
    
    // Now unset $obj:
    unset($obj);
    
    // The entry is automatically removed from the WeakMap
    var_dump($weakMap); // empty WeakMap

?>
```

## See Also

+ [Hacking PHP’s WeakMap for Value Object D×](https://withinboredom.info/posts/hacking-phps-weakmap-for-value-object-dx/)
+ [WeakMaps a hidden gem in PHP](https://flareapp.io/blog/weakmaps-a-hidden-gem-in-php)

Related : [Array, []](Array, []), [SplStorageObjects](SplStorageObjects), [Garbage Collection](Garbage Collection), [Resource Leak](Resource Leak)
