---
type: "concept"
title: "Magic Values"
description: "A magic value is a literal value that appears in the code without a clear explanation of its meaning."
resource: "https://en.wikipedia.org/wiki/Magic_number_(programming)"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Magic Values

A magic value is a literal value that appears in the code without a clear explanation of its meaning.

Similar to magic numbers, magic values can be strings, arrays, or other literal types. They should be replaced with named constants or configuration values to improve readability and maintainability.

```php
<?php

    // Magic string value
    $role = 'admin';
    
    // Better: use a constant
    const ROLE_ADMIN = 'admin';
    $role = ROLE_ADMIN;

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Magic_number_(programming)](https://en.wikipedia.org/wiki/Magic_number_(programming))

## See Also
- [Constants](https://www.php.net/manual/en/language.constants.php)
- [Enumerations](https://www.php.net/manual/en/language.enumerations.php)

## Related
- [Magic Numbers](/features/magic-number.md)
- [Hard Coded](/features/hard-coded.md)
- [Constants](/features/constant.md)
- [Code Smell](/features/code-smell.md)
- [Readability](/features/readability.md)

