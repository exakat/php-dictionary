---
type: "PHP Feature"
title: "SplObjectStorage"
description: "``SplObjectStorage`` provides a map from objects to arbitrary data, or a set of objects."
resource: "https://www.php.net/manual/en/class.splobjectstorage.php"
tags: ["spl", "data structure", "object"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/class.splobjectstorage.php](https://www.php.net/manual/en/class.splobjectstorage.php)

## See Also
- [How PHP's SplObjectStorage Solves Problems You Didn't Know You Had](https://levelup.gitconnected.com/how-phps-splobjectstorage-solves-problems-you-didn-t-know-you-had-7b9d4eb4334d)
- [PHP SplObjectStorage attach() Function](https://www.geeksforgeeks.org/php/php-splobjectstorage-attach-function/)

## Related
- [Standard PHP Library (SPL)](/features/spl.md)
- [Data Structure](/features/datastructure.md)
- [Collection](/features/collection.md)
- [Object](/features/object.md)
- [Iterator](/features/iterator.md)
- [SplStorageObjects](/features/splstorageobjects.md)
- [SplSubject](/features/splsubject.md)

## Details
- PHP since: 5.1
- Extension: ext-spl

