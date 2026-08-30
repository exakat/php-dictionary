---
type: "PHP Feature"
title: "is_object()"
description: "``is_object()`` is a PHP native function that checks if the content of a variable is an object or not, without consideration for the actual class."
resource: "https://www.php.net/manual/en/function.is-object.php"
tags: ["object", "native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# is_object()

``is_object()`` is a PHP native function that checks if the content of a variable is an object or not, without consideration for the actual class. It is the equivalent of ``object`` type, which cannot be used with ``instanceof``; or the ``(object)`` cast, that turns a value into an object of class ``stdClass``.

``is_object()`` is rarely used, as ``instanceof`` with the expected class or interface is more precise.

```php
<?php

var_dump(is_object((object)[])); // true

$x = new stdClass();
var_dump(is_object($x)); // true

$x = 1;
var_dump(is_object($x)); // false

?>
```

## Documentation
- [https://www.php.net/manual/en/function.is-object.php](https://www.php.net/manual/en/function.is-object.php)

## See Also
- [gettype](https://www.php.net/manual/en/function.gettype.php)
- [is_a](https://www.php.net/manual/en/function.is-a.php)

## Related
- [instanceof](/features/instanceof.md)
- [stdclass](/features/stdclass.md)
- [is_a()](/features/is_a.md)

