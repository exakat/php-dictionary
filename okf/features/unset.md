---
type: "keyword"
title: "unset()"
description: "``unset()`` removes a variable, an array item or an property."
resource: "https://www.php.net/manual/en/function.unset.php"
tags: ["keyword", "cast", "removed feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# unset()

``unset()`` removes a variable, an array item or an property. This feature used to be available as a function call ``unset()`` or as a type cast ``(unset)``. The type-cast was removed in version 7.2. 

It is not possible to remove a static property, but it is possible to remove a property: a defined property will be reverted to its definition, while an undefined property is removed. It may end up being uninitialized if it does not have a default value.

```php
<?php

    $a = ['b' => 1];
    unset($a['b']); // unset an element
    unset($a);      // unset the whole array
    
    var_dump(isset($a)); // false

?>
```

## Documentation
- [https://www.php.net/manual/en/function.unset.php](https://www.php.net/manual/en/function.unset.php)

## See Also
- [PHP unset Keyword](https://zetcode.com/php/unset-keyword/)
- [Demystifying PHP‘s Unset() Function](https://thelinuxcode.com/php-unset-function/)

## Related
- [Variables](/features/variable.md)
- [Index For Arrays](/features/index-array.md)
- [Garbage Collection](/features/garbage-collection.md)
- [Local Variable](/features/local-variable.md)

