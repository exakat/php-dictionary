---
type: "PHP Feature"
title: "Bitshift Operators"
description: "Bitshift operators ``<<`` and ``>>`` move bits within an integer."
resource: "https://www.php.net/manual/en/language.operators.bitwise.php"
tags: ["operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Bitshift Operators

Bitshift operators ``<<`` and ``>>`` move bits within an integer. The bits are shifted by an number of position, to the right or to the left. They are equivalent to multiplying or dividing by a power of 2.

```php
<?php

$a = 3;       // binary : 11
echo $a >> 1; // binary : 1 (the last 1 is lost)
echo $a << 2; // binary : 1100 

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.bitwise.php](https://www.php.net/manual/en/language.operators.bitwise.php)

## See Also
- [Are Bitwise Operators Still Relevant in Modern PHP?](https://www.sitepoint.com/bitwise-operators-still-relevant-modern-php/)

## Related
- [Logical Operators](/features/logical-operator.md)
- [Bitwise Operators](/features/bitwise-operator.md)

