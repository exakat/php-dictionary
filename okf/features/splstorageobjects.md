---
type: "PHP Feature"
title: "SplStorageObjects"
description: "The ``SplObjectStorage`` class provides a list for objects: it may also the values with the same object, making it an efficient object set."
resource: "https://www.php.net/manual/en/class.splobjectstorage.php"
tags: ["dataset", "map"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# SplStorageObjects

The ``SplObjectStorage`` class provides a list for objects: it may also the values with the same object, making it an efficient object set.

``SplObjectStorage`` is part of the Standard PHP Library, ``SPL``, available since version 5.1. It stores a collection of objects, using the object itself, rather than its content, as the key: internally, it relies on the object's unique handle, so two different instances with identical properties are treated as two distinct entries, while the same instance is always recognized, even if referenced through different variables. Each stored object may optionally be associated with a piece of data, making the structure work both as a set of unique objects, and as a map from objects to arbitrary values.

The class implements ``Countable``, ``Iterator``, ``ArrayAccess``, and ``Serializable``, so it supports ``count()``, ``foreach`` iteration, and access through the array syntax, ``$storage[$object]``, in addition to its own dedicated methods such as ``attach()``, ``detach()``, and ``contains()``. Because comparing objects by identity would otherwise require manual bookkeeping, typically an array keyed by ``spl_object_hash()`` or ``spl_object_id()``, ``SplObjectStorage`` is commonly used to track visited nodes while walking a graph, to associate metadata with objects without modifying their own properties, or to implement the Identity Map pattern.

Since PHP 8.0, the ``WeakMap`` class offers a related, but distinct, capability: like ``SplObjectStorage``, it maps objects to values, but it holds only weak references to its keys, allowing them to be garbage collected when no other reference to them remains, which ``SplObjectStorage`` does not do.

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

## Documentation
- [https://www.php.net/manual/en/class.splobjectstorage.php](https://www.php.net/manual/en/class.splobjectstorage.php)

## See Also
- [SplObjectStorage Class](https://medium.com/@vishwa.chikate/php-splobjectstorage-class-530ff5b5aab7)

## Related
- [Object](/features/object.md)
- [SplObjectStorage](/features/splobjectstorage.md)
- [Weakmap](/features/weakmap.md)

## Details
- Extension: ext-spl

