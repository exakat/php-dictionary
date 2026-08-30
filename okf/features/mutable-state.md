---
type: "concept"
title: "Mutable State"
description: "Mutable state refers to data that can be changed after it is created."
resource: "https://en.wikipedia.org/wiki/Immutable_object"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Mutable State

Mutable state refers to data that can be changed after it is created.

Most objects and arrays are mutable by default. Mutable state can lead to bugs in concurrent environments and makes code harder to reason about.

PHP offers several mechanisms to create immutable state:

+ ``readonly`` properties, since PHP 8.1+
+ Immutable classes, like ``DateTimeImmutable``
+ Final classes to prevent modification via inheritance.

```php
<?php

    // Mutable state
    class User {
        public string $name;
    }
    
    $user = new User();
    $user->name = 'Alice';
    $user->name = 'Bob'; // Mutable

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Immutable_object](https://en.wikipedia.org/wiki/Immutable_object)

## See Also
- [PHP Readonly Properties](https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties)
- [DateTimeImmutable](https://www.php.net/manual/en/class.datetimeimmutable.php)

## Related
- [State](/features/state.md)
- [Immutable](/features/immutable.md)
- [Readonly](/features/readonly.md)
- [Properties](/features/property.md)
- [Side Effect](/features/side-effect.md)

