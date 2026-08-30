---
type: "PHP Feature"
title: "Bitwise Operators"
description: "Bitwise operators evaluate specific bits within an integer."
resource: "https://www.php.net/manual/en/language.operators.bitwise.php"
tags: ["operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Bitwise Operators

Bitwise operators evaluate specific bits within an integer. 

Bitwise operators are convenient to handle bit fields. 

+ ``&``, ``&=``: ampersand operator, and
+ ``|``, ``|=``: pipe operator, or
+ ``^``, ``^=``: caret operator, xor

All these operators have a short assignation version, as shown above.

These operators differ from logical operators, which convert the value to boolean before manipulation.

```php
<?php

$a = 3;  // binary : 11
$b = 7;  // binary : 111

print $a & $b; // 3; binary : 11

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.bitwise.php](https://www.php.net/manual/en/language.operators.bitwise.php)

## See Also
- [Are Bitwise Operators Still Relevant in Modern PHP?](https://www.sitepoint.com/bitwise-operators-still-relevant-modern-php/)
- [Bitmasks and Bitwise Operators in PHP](https://rodstaines.medium.com/bitmasks-and-bitwise-operators-in-php-1718b80cd50f)

## Related
- [Logical Operators](/features/logical-operator.md)
- [And Operator](/features/and.md)
- [Short Assignations](/features/short-assignation.md)
- [Bitfield](/features/bitfield.md)
- [Boolean](/features/boolean.md)
- [Bitmask](/features/bitmask.md)
- [Bitshift Operators](/features/bitshift-operator.md)
- [Letter Logical Bug](/features/letter-logical.md)
- [Pipe ``|``, The Logical Operator](/features/pipe.md)

