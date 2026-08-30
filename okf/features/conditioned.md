---
type: "adjective"
title: "Conditioned Structures"
description: "Conditioned structures are definitions that are placed inside a condition structure."
resource: "https://en.wikipedia.org/wiki/Conditional_(computer_programming)"
tags: ["feature", "adjective"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Conditioned Structures

Conditioned structures are definitions that are placed inside a condition structure. 

For example, it is possible to create a function or a class, only if it doesn't exist. 

Classes, traits, interfaces, global constants, with ``define()``, enumerations, functions may be conditioned. 

Class constants, properties, methods and cases, for ``enum``, cannot be conditioned.

Conditioned structures adapt the PHP context to external condition. For example, some function may become native after a specific PHP version, and is only redefined for older installation. 

Some structures do not accept condition, such as global constants with ``const`` keyword. With ``define()`` function, it is OK.

```php
<?php

    if (!function_exists('foo')) {
        function foo() {
            // doSomething
        }
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Conditional_(computer_programming)](https://en.wikipedia.org/wiki/Conditional_(computer_programming))

## See Also
- [Control Structures](https://www.php.net/manual/en/language.control-structures.php)
- [PHP: The if Statement](https://www.php.net/manual/en/control-structures.if.php)

## Related
- [Const](/features/const.md)
- [define()](/features/define.md)

