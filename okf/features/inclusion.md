---
type: "PHP Feature"
title: "Inclusions"
description: "Inclusion is the operation to add PHP code stored in an external file, into another PHP code."
resource: "https://www.php.net/manual/en/function.include.php"
tags: ["feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Inclusions

Inclusion is the operation to add PHP code stored in an external file, into another PHP code. 

Inclusions rely on four native functions: ``include``, ``require``, ``include_once``, ``require_once``. 

Inclusions have application with templates, configurations, caches, function libraries. 

Inclusions have been superseded by autoload in recent PHP versions. Autoload relies on inclusion, though.

```php
<?php

echo "A $color $fruit"; // A

include 'vars.php';

echo "A $color $fruit"; // A green apple

?>
```

## Documentation
- [https://www.php.net/manual/en/function.include.php](https://www.php.net/manual/en/function.include.php)

## See Also
- [PHP Include](https://www.phptutorial.net/php-tutorial/php-include-file/)
- [PHP Include & Require : All about Include vs Require in PHP](https://www.simplilearn.com/tutorials/php-tutorial/include-in-php)

## Related
- [Class Autoloading](/features/autoload.md)
- [Code Injection](/features/code-injection.md)
- [Control Flow](/features/control-flow.md)
- [include](/features/include.md)

## Details
- PHP since: 8.0+

