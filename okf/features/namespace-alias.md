---
type: "PHP Feature"
title: "Namespace Alias"
description: "PHP can alias, or import, constants, functions, classes, interfaces, traits, enumerations and namespaces."
resource: "https://www.php.net/manual/en/language.namespaces.importing.php"
tags: ["alias", "naming conflict"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Namespace Alias

PHP can alias, or import, constants, functions, classes, interfaces, traits, enumerations and namespaces. 

This makes the code shorter, as the imported structure can be called with its alias name, instead of the fully qualified name. 

Aliasing solves naming conflicts, by giving another local name to any structure.

```php
<?php

namespace a {
    class x {
    }
}

namespace b {
    use a\x as aX;
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.namespaces.importing.php](https://www.php.net/manual/en/language.namespaces.importing.php)

## See Also
- [How to Use PHP Namespaces, Part 2: Importing, Aliases, and Name Resolution](https://www.sitepoint.com/php-namespaces-import-alias-resolution/)
- [PHP Aliasing/Importing namespaces](https://www.tutorialspoint.com/php-aliasing-importing-namespaces)

## Related
- [Use Alias](/features/use-alias.md)

## Details
- PHP since: 5.3

