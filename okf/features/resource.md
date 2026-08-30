---
type: "type"
title: "resource"
description: "A resource is a special type of data, holding a reference to an external resource."
resource: "https://www.php.net/manual/en/language.types.resource.php"
tags: ["type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# resource

A resource is a special type of data, holding a reference to an external resource. Resources are created and used by special functions. 

Resources are only used with their dedicated functions. It is not possible to modify them in any other way.

Resources, in general, are being removed from PHP code and more recent versions tend to rely less on them and more on objects. 

There is a list of PHP resources available in the docs.

```php
<?php

    $fp = fopen('/tmp/test.txt', 'r+');
    var_dump(is_resource($fp));

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.resource.php](https://www.php.net/manual/en/language.types.resource.php)

## See Also
- [List of Resource Types](https://www.php.net/manual/en/resource.php)

## Related
- [Type System](/features/type.md)
- [PHP Natives](/features/native-type.md)
- [Array Syntax](/features/array-syntax.md)
- [Handle](/features/handle.md)
- [Object Syntax](/features/object-syntax.md)
- [Resource Leak](/features/resource-leak.md)

