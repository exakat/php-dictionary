---
type: "type"
title: "True"
description: "``true`` has two usages, as PHP keyword: the opposite of ``false``, as a boolean value and a special type for functions that may return a boolean, but only true, never ``false``."
resource: "https://www.php.net/manual/en/language.types.boolean.php"
tags: ["type", "boolean", "value"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# True

``true`` has two usages, as PHP keyword: the opposite of ``false``, as a boolean value and a special type for functions that may return a boolean, but only true, never ``false``. 

``true`` as a type was introduced in version 8.2.

```php
<?php

    function foo($a) : true|A {
        if ($a == 1) {
            return true;
        } else {
            return new A();
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.boolean.php](https://www.php.net/manual/en/language.types.boolean.php)

## See Also
- [PHP Boolean: Assigning True or False to a Variable](https://flatcoding.com/tutorials/php/php-boolean-true-and-false/)

## Related
- [Boolean](/features/boolean.md)
- [Type System](/features/type.md)
- [False](/features/false.md)
- [Logical Operators](/features/logical-operator.md)
- [Minus One -1](/features/minus-one.md)
- [PHP Natives](/features/native-type.md)
- [Standalone Types](/features/standalone-type.md)
- [Truthy](/features/truthy.md)

