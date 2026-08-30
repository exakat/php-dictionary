---
type: "concept"
title: "Compatibility"
description: "Compatibility refers to the ability of two or more things to work together without conflicts or issues."
resource: "https://en.wikipedia.org/wiki/Compatibility"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Compatibility

Compatibility refers to the ability of two or more things to work together without conflicts or issues. 

Compatibility may refer to:

+ Version compatibility, when code works in both versions
+ System compatibility, when code works on different operating systems
+ Method compatibility, when methods are compatible in the parent and the child class.

```php
<?php

    class X {
        function foo(int $i) {}
    }
    
    class Y extends X {
        // The type must be compatible with the one of the parent
        // The name does not have to be the same as in the parent
        function foo(int|null $b) {}
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Compatibility](https://en.wikipedia.org/wiki/Compatibility)

## See Also
- [PHP: Migrating from PHP 8.3.x to PHP 8.4.x](https://www.php.net/manual/en/migration84.php)
- [PHP: Supported Versions](https://www.php.net/supported-versions.php)

## Related
- [Method Compatibility](/features/method-compatibility.md)
- [Interoperability](/features/interoperability.md)
- [Migration](/features/migration.md)

