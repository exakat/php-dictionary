---
type: "character"
title: "Question Mark ?"
description: "``?`` is a character, used in various situations: + Ternary operator: ``$a ?"
resource: "https://www.php.net/manual/en/language.operators.comparison.php"
tags: ["character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Question Mark ?

``?`` is a character, used in various situations: 

+ Ternary operator: ``$a ? $b : $c``
+ Short ternary operator: ``$a ?: $c``
+ Coalesce operator: ``$a ??``
+ Null type, ``function foo(?int $int) {}``
+ As a quantifier in regex, 0 or 1
+ As a quantifier with ``fnmatch()``, 0 or 1.

```php
<?php

    $a = 1;
    echo a ? 'b' : 'c'; // c

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.comparison.php](https://www.php.net/manual/en/language.operators.comparison.php)

## See Also

## Related
- [Coalesce Operator](/features/coalesce.md)
- [Type System](/features/type.md)
- [Regular Expression](/features/regex.md)
- [fnmatch()](/features/fnmatch.md)

