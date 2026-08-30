---
type: "PHP Feature"
title: "Object Syntax"
description: "The object syntax is a coding style that involves using the object operator ``->``, and, to a lesser extent, the static operator ``::``."
resource: "https://www.php.net/manual/en/language.oop5.php"
tags: ["object"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Object Syntax

The object syntax is a coding style that involves using the object operator ``->``, and, to a lesser extent, the static operator ``::``.

Object syntax is often opposed to the array syntax, which relies on arrays and the square brackets ``[ ]``: it uses string index as properties and functions instead of methods.

Object syntax is also opposed to ``resource``: some PHP extensions produce resources, which are usually fed as the first argument into dedicated functions. The object syntax hides the resource in an object, and makes use of method calls, with similar names and parameters.

```php
<?php

    $object = new Stdclass();
    $object->property = 1;
    echo $object->property;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.php](https://www.php.net/manual/en/language.oop5.php)

## See Also
- [Basic Class Definitions](https://www.php.net/manual/en/language.oop5.basic.php)

## Related
- [Array Syntax](/features/array-syntax.md)
- [resource](/features/resource.md)

