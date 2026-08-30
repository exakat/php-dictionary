---
type: "PHP Feature"
title: "Leading Numeric String"
description: "A leading numeric string is a subset of numeric strings, where the first characters are numbers, or the occasional ``+`` or ``-``, and the rest of the string is non-digits."
resource: "https://www.php.net/manual/en/language.types.numeric-strings.php"
tags: ["string"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Leading Numeric String

A leading numeric string is a subset of numeric strings, where the first characters are numbers, or the occasional ``+`` or ``-``, and the rest of the string is non-digits.

Leading numeric strings are used during conversion of strings into a number, although they are not used with the implicit integer conversion for arrays.

Leading numeric strings emit a warning when they drop the final characters.

```php
<?php

    echo '123bc' + 1;
    // Warning: A non-numeric value encountered 
    // 124
    
    print_r(['123bc' =>1]);
    /*
      Array
      (
          [123bc] => 1
      )
    */

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.numeric-strings.php](https://www.php.net/manual/en/language.types.numeric-strings.php)

## See Also
- [Saner string to number comparisons RFC](https://wiki.php.net/rfc/saner-numeric-strings)
- [Type Juggling](https://www.php.net/manual/en/language.types.type-juggling.php)

## Related
- [Numeric String](/features/numeric-string.md)

