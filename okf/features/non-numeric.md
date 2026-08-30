---
type: "PHP Feature"
title: "Non-numeric"
description: "A non-numeric string is a string that can't be converted to a number without difficult choices."
resource: "https://www.php.net/manual/en/function.is-numeric.php"
tags: ["integer", "decimal"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Non-numeric

A non-numeric string is a string that can't be converted to a number without difficult choices.

When forced to a number, such string emits a warning, unless hidden with cast or noscream ``@`` operator.

A string may be only constituted of digits, from 0 to 9. It might be converted to a float or to ``INF``, depending on its size. In arrays, when used as an index, a very long string is kept as a string, and it is not converted to integer.

A string may be considered as ``is_numeric()`` when it is built with digits, whatever its size. In fact, when such a string is converted to float, it might go beyond the largest PHP float, and become ``INF``: this constant is of type ``float``.

```php
<?php

    $string = '123';
    $integer = (int) $string; // 123
    
    $string = '12.3E4';
    $float = (float) $string; // 123000
    
    $nonNumeric = '12a3';
    $integer = (int) $string; // 12

?>
```

## Documentation
- [https://www.php.net/manual/en/function.is-numeric.php](https://www.php.net/manual/en/function.is-numeric.php)

## See Also
- [Remove All Non-Numeric Characters from String using PHP](https://lindevs.com/code-snippets/remove-all-non-numeric-characters-from-string-using-php)

## Related
- [@, No Scream Operator](/features/noscream.md)
- [Cast Operator](/features/cast.md)
- [Floating Point Numbers](/features/float.md)
- [INF](/features/inf.md)

