---
type: "PHP Feature"
title: "Weakmap"
description: "``WeakMap`` is a special object type: it is a map, or key–value storage, where the keys are objects and the stored values are automatically removed when the object key is no longer referenced anywhere else in the program."
resource: "https://www.php.net/manual/en/class.weakmap.php"
tags: ["php class"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Weakmap

``WeakMap`` is a special object type: it is a map, or key–value storage, where the keys are objects and the stored values are automatically removed when the object key is no longer referenced anywhere else in the program.

``WeakMap`` may be considered an associative array, where the keys must be objects. It also doesn't prevent objects from being garbage-collected.

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

## Documentation
- [https://www.php.net/manual/en/class.weakmap.php](https://www.php.net/manual/en/class.weakmap.php)

## See Also
- [Hacking PHP’s WeakMap for Value Object D×](https://withinboredom.info/posts/hacking-phps-weakmap-for-value-object-dx/)
- [WeakMaps a hidden gem in PHP](https://flareapp.io/blog/weakmaps-a-hidden-gem-in-php)

## Related
- [Array, []](/features/array.md)
- [SplStorageObjects](/features/splstorageobjects.md)
- [Garbage Collection](/features/garbage-collection.md)
- [Resource Leak](/features/resource-leak.md)

