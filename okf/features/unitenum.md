---
type: "PHP Feature"
title: "UnitEnum"
description: "The ``UnitEnum`` interface identifies any enumeration."
resource: "https://www.php.net/manual/en/class.unitenum.php"
tags: ["enum", "interface"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# UnitEnum

The ``UnitEnum`` interface identifies any enumeration. It works on both enumerations and backed-enumerations.

This interface is only available for type checks, and cannot be implemented by another class.

This interface ensure the ``enum::cases()`` method is available, that lists all cases in that enumeration.

```php
<?php

enum E { case A;} 
enum F: int { case B = 1;} 

var_dump(E::A instanceof UnitEnum); // true
var_dump(F::B instanceof UnitEnum); // true

?>
```

## Documentation
- [https://www.php.net/manual/en/class.unitenum.php](https://www.php.net/manual/en/class.unitenum.php)

## See Also
- [Use the PHP UnitEnum::cases() during testing](https://medium.com/@kczereczon/usage-php-unitenum-cases-in-testing-cf178a5ac372)

## Related
- [Enumeration (enum)](/features/enum.md)
- [BackedEnum](/features/backedenum.md)
- [Interface](/features/interface.md)
- [PHP Native Interfaces](/features/php-interface.md)

