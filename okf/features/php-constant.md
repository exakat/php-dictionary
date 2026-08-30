---
type: "PHP Feature"
title: "PHP Constants"
description: "PHP provides a set of predefined global constants."
resource: "https://www.php.net/manual/en/reserved.variables.php"
tags: ["variable"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PHP Constants

PHP provides a set of predefined global constants. 

The set of predefined variables changes with PHP versions: for example, in version 8.0, ``T_READONLY`` was not defined, and appeared in version 8.1. 

It is possible to list all available PHP native constants with the function ``get_declared_constants()``.

```php
<?php

    print E_ALL;

    print PHP_VERSION;

?>
```

## Documentation
- [https://www.php.net/manual/en/reserved.variables.php](https://www.php.net/manual/en/reserved.variables.php)

## See Also
- [Understanding PHP Constants: A Simple Guide with Examples](https://flatcoding.com/tutorials/php/understanding-the-php-constant-expression/)

## Related
- [Variables](/features/variable.md)
- [Native](/features/native.md)
- [DIRECTORY_SEPARATOR](/features/directory_separator.md)
- [New Line](/features/new-line.md)
- [Predefined Constants](/features/predefined-constant.md)

