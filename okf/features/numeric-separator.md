---
type: "PHP Feature"
title: "Numeric Separator"
description: "Since PHP 7.4, it is possible to add underscores as numeric separators within numeric literals to improve their readability."
resource: "https://www.php.net/manual/en/language.types.integer.php#language.types.integer.syntax"
tags: ["feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Numeric Separator

Since PHP 7.4, it is possible to add underscores as numeric separators within numeric literals to improve their readability. This feature allows to group digits, making them easier to read and understand. Numeric separators have no effect on the value of the number; they're purely for human-friendly formatting.

```php
<?php

$phone_fr = 1_33_61_23_45_67;
$phone_ca = 1_514_387_9947;

// true;
var_dump(1_2_3 === 123);

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.integer.php#language.types.integer.syntax](https://www.php.net/manual/en/language.types.integer.php#language.types.integer.syntax)

## See Also
- [Underscore numeric separator - PHP 7.4](https://php.watch/versions/7.4/underscore_numeric_separator)
- [PHP RFC: Numeric Literal Separator](https://wiki.php.net/rfc/numeric_literal_separator)

## Related
- [integer](/features/integer.md)
- [Floating Point Numbers](/features/float.md)
- [Underscore](/features/underscore.md)
- [Separator](/features/separator.md)

## Details
- PHP since: 7.4

