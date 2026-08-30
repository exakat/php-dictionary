---
type: "PHP Feature"
title: "Array With Curly Braces"
description: "Curly braces used to be a feature, used to access specific index in an array or in a string."
resource: "https://www.php.net/manual/en/language.types.array.php#language.types.array.syntax.accessing"
tags: ["syntax", "feature", "removed", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Array With Curly Braces

Curly braces used to be a feature, used to access specific index in an array or in a string. They acted like the square braces. 

This features was deprecated in version 8.0.

```php
<?php

    $array = ['a', 'b', 'c', 'd'];
    echo $array{2};    // c
    
    $string = 'abcd';
    echo $string{2};   // c

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.array.php#language.types.array.syntax.accessing](https://www.php.net/manual/en/language.types.array.php#language.types.array.syntax.accessing)

## See Also
- [PHP RFC: Deprecate curly brace syntax for accessing array elements and string offsets](https://wiki.php.net/rfc/deprecate_curly_braces_array_access)

## Related
- [Array, []](/features/array.md)
- [Bracket](/features/bracket.md)

## Details
- PHP until: 8.0
- Deprecated: 7.4

