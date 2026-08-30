---
type: "character"
title: "Not Operator"
description: "The not operator return the opposite boolean of a value."
resource: "https://www.php.net/manual/en/language.operators.logical.php"
tags: ["operator", "logical", "character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Not Operator

The not operator return the opposite boolean of a value. The value is first converted to boolean, according to classic PHP rules, then, negated. This operator returns a boolean.

There is also a bitwise not operator, which works at the bit level, on the value: ``~``.

```php
<?php

    $a = 3;
    
    if (!$a) {
        print 'OK';
    } else {
        print 'KO';
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.logical.php](https://www.php.net/manual/en/language.operators.logical.php)

## See Also
- [Logical NOT (!)](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Operators/Logical_NOT)
- [What is the Logical Operators in PHP?](https://dev.to/baransel/what-is-the-logical-operators-in-php-3bgf)

## Related
- [Bang !](/features/bang.md)
- [Tilde ~](/features/tilde.md)
- [Binary Not Operator](/features/binary-not.md)
- [Logical Operators](/features/logical-operator.md)

