---
type: "PHP Feature"
title: "BackedEnum"
description: "The ``BackedENum`` interface identifies an enumeration with a string or int value."
resource: "https://www.php.net/manual/en/class.backedenum.php"
tags: ["enum", "interface"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# BackedEnum

The ``BackedENum`` interface identifies an enumeration with a string or int value. It works only on backed-enumerations.

This interface is only available for type checks, and cannot be implemented by another class.

This interface ensures the ``enum::tryFrom()`` and ``enum::from()`` methods and the ``enum::$value`` property are available, to convert from and to scalars.

```php
<?php

enum E { case A;} 
enum F: int { case B = 1;} 

var_dump(E::A instanceof BackedEnum); // false
var_dump(F::B instanceof BackedEnum); // true

?>
```

## Documentation
- [https://www.php.net/manual/en/class.backedenum.php](https://www.php.net/manual/en/class.backedenum.php)

## See Also
- [Use the PHP UnitEnum::cases() during testing](https://medium.com/@kczereczon/usage-php-unitenum-cases-in-testing-cf178a5ac372)

## Related
- [Enumeration (enum)](/features/enum.md)
- [UnitEnum](/features/unitenum.md)
- [String](/features/string.md)
- [Interface](/features/interface.md)
- [PHP Native Interfaces](/features/php-interface.md)
- [Unbacked Enum](/features/unbacked-enum.md)

