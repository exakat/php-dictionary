---
type: "PHP Feature"
title: "Unbacked Enum"
description: "Unbacked enums are enumeration without a string or integer equivalent for each of its cases."
resource: "https://www.php.net/manual/en/language.types.enumerations.php"
tags: ["enum"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Unbacked Enum

Unbacked enums are enumeration without a string or integer equivalent for each of its cases.

Unbacked enums are the default cases, and are implied when not mentioned. The opposite is backed enum.

```php
<?php

    enum Ecclectic {
        case PHP;
        case ELEPHPANT;
        case SYNTAX_ERROR;
        case SPADE;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.enumerations.php](https://www.php.net/manual/en/language.types.enumerations.php)

## See Also
- [PHP RFC: Enumerations](https://wiki.php.net/rfc/enumerations)

## Related
- [Enumeration (enum)](/features/enum.md)
- [Backed Enum](/features/backed-enum.md)
- [BackedEnum](/features/backedenum.md)

## Details
- PHP since: 8.1

