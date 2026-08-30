---
type: "type"
title: "False"
description: "``false`` has two usages, as a PHP keyword: the opposite of ``true``, as a boolean value and a special type for functions that may return a boolean, but not ``true``."
resource: "https://www.php.net/manual/en/language.types.boolean.php"
tags: ["type", "boolean", "value"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# False

``false`` has two usages, as a PHP keyword: the opposite of ``true``, as a boolean value and a special type for functions that may return a boolean, but not ``true``.

```php
<?php

function foo($a) : false|A {
    if ($a == 1) {
        return false;
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
- [True](/features/true.md)
- [Falsy](/features/falsy.md)
- [Truthy](/features/truthy.md)
- [Underscore](/features/underscore.md)
- [zero](/features/zero.md)
- [Logical Operators](/features/logical-operator.md)
- [file_get_contents()](/features/file_get_contents.md)
- [PHP Natives](/features/native-type.md)
- [one](/features/one.md)
- [Short Ternary Operator](/features/short-ternary.md)
- [Autovivification](/features/autovivification.md)
- [Standalone Types](/features/standalone-type.md)

