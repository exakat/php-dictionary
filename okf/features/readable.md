---
type: "concept"
title: "Readable"
description: "Something is readable when its current value may be accessed."
resource: "https://www.php.net/manual/en/function.is-readable.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Readable

Something is readable when its current value may be accessed. For example, a variable is readable, as it may be read at any moment. On the other hand, a property may be unreadable, depending on the context, because of the visibility configuration.

Variable, properties with the correct visibility, static properties, constants, class constants with the correct visibility, array elements are readable.

Files are another object that requires permissions. This time, the operating system provides the permissions. A file is readable when the ``is_readable()`` function returns true.

```php
<?php

    $x = 3;
    echo $x;

?>
```

## Documentation
- [https://www.php.net/manual/en/function.is-readable.php](https://www.php.net/manual/en/function.is-readable.php)

## See Also
- [Visibility](https://www.php.net/manual/en/language.oop5.visibility.php)
- [is_writable](https://www.php.net/manual/en/function.is-writable.php)

## Related
- [Visibility](/features/visibility.md)
- [Variables](/features/variable.md)
- [Static Property](/features/static-property.md)
- [Properties](/features/property.md)
- [Container](/features/container.md)
- [Array Element](/features/array-element.md)
- [Writeable](/features/writeable.md)
- [Technical Debt](/features/debt.md)
- [fopen()](/features/fopen.md)
- [Maintenability](/features/maintenability.md)
- [Writable](/features/writable.md)
- [Floating Point Numbers](/features/float.md)

