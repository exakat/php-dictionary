---
type: "PHP Feature"
title: "is_a()"
description: "``is_a()`` is a PHP native function, that checks if an object is of a specific class."
resource: "https://www.php.net/manual/en/function.is-a.php"
tags: ["object"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# is_a()

``is_a()`` is a PHP native function, that checks if an object is of a specific class. 

Usually, ``is_a()`` is better replaced by ``instanceof``, which is a PHP operator. The function might be needed to create a closure, though.

```php
<?php

    $object = (object) ['a' => 1];

    var_dump(is_a($object, stdClass::class));

?>
```

## Documentation
- [https://www.php.net/manual/en/function.is-a.php](https://www.php.net/manual/en/function.is-a.php)

## See Also
- [is_a() versus instanceof](https://php-tips.readthedocs.io/en/latest/tips/is_a_and_instanceof.html)

## Related
- [instanceof](/features/instanceof.md)
- [Type Checking](/features/type-checking.md)
- [Object](/features/object.md)
- [Polymorphism](/features/polymorphism.md)
- [Class](/features/class.md)
- [is_object()](/features/is_object.md)

