---
type: "PHP Feature"
title: "Logical Operators"
description: "Logical operators applies four logical functions to booleans."
resource: "https://www.php.net/manual/en/language.operators.comparison.php"
tags: ["operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Logical Operators

Logical operators applies four logical functions to booleans. 

+ ``and`` and ``&&``
+ ``or`` and ``||``
+ ``xor``, no symbolic version for ``xor``
+ ``!``, no letter version for ``not``

The logical operators are either symbolic or letter. Be aware that the symbolic operators have a higher precedence than the letter one, in particular in regards to comparisons.

The logical operators work on various types, and output booleans. They are different from the bitwise operators, which work on the value as a bit level, not as a whole.

```php
<?php

    if ($a == $b) {
        print "a and b are equal";
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.comparison.php](https://www.php.net/manual/en/language.operators.comparison.php)

## See Also
- [Operator Precedence](https://www.php.net/manual/en/language.operators.precedence.php)

## Related
- [Bitwise Operators](/features/bitwise-operator.md)
- [Not Operator](/features/not.md)
- [And Operator](/features/and.md)
- [Bitshift Operators](/features/bitshift-operator.md)
- [False](/features/false.md)
- [True](/features/true.md)
- [Letter Logical Bug](/features/letter-logical.md)
- [Pipe Operator ``|>``](/features/pipe-operator.md)

