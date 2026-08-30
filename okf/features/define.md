---
type: "PHP Feature"
title: "define()"
description: "``define()`` is a PHP function that introduces global constant definitions."
resource: "https://www.php.net/manual/en/control-structures.alternative-syntax.php"
tags: ["constant"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# define()

``define()`` is a PHP function that introduces global constant definitions.

``define()`` is a function, and may be called anywhere. It is slower than ``const``, as it is only executed at runtime. ``define()`` doesn't allow the creation of class constants.

``define()`` used to create case-insensitive constants, and this was abandoned in version 7.3.

``define()`` cannot create class constants.

```php
<?php
    define('HELLO', 'Hello');
    
    print HELLO . " world\n";
?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.alternative-syntax.php](https://www.php.net/manual/en/control-structures.alternative-syntax.php)

## See Also
- [Problem: Define() vs Const in PHP](https://www.uptimia.com/questions/what-are-the-differences-between-define-and-const-in-php)

## Related
- [Const](/features/const.md)
- [Constants](/features/constant.md)
- [Static Constant](/features/class-constant.md)
- [defined()](/features/defined.md)
- [Conditioned Structures](/features/conditioned.md)
- [Execution Time](/features/execution-time.md)

