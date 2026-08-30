---
type: "disambiguation"
title: "Minus -"
description: "``-`` is a native PHP operator, which allows subtraction on numbers, both integers and decimals, or produce the opposite of a number."
resource: "https://www.php.net/manual/en/language.operators.arithmetic.php"
tags: ["disambiguation", "character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Minus -

``-`` is a native PHP operator, which allows subtraction on numbers, both integers and decimals, or produce the opposite of a number.

``-`` silently triggers a conversion to a number, preferably integers, but otherwise decimal. It may produce a warning or a fatal error, if this is not possible.

It may also be repeated, with the pre- and post- increment operators.

It is the contrary to ``+``.

```php
<?php

$a = 2 - 1; // 1

$a = -$a; // -1
$a = -$a; //  1

--$a; // 0
$a--; // -1 

?>
```

## Documentation
- [https://www.php.net/manual/en/language.operators.arithmetic.php](https://www.php.net/manual/en/language.operators.arithmetic.php)

## See Also

## Related
- [Plus +](/features/plus.md)
- [Pre-increment](/features/pre-increment.md)
- [Post-increment](/features/post-increment.md)
- [Sign](/features/sign.md)

