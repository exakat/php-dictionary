---
type: "concept"
title: "Implicit"
description: "A feature is implicit when it is available, yet not explicitly visible."
resource: "https://en.wikipedia.org/wiki/Implicit_type_conversion"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Implicit

A feature is implicit when it is available, yet not explicitly visible. 

For example, objects are passed by reference to functions: any change applied to that object, inside the function, is also available in the calling context.

Until PHP 8.4, it was possible to assign ``null`` as a default value to any typed parameter: ``null`` was implicitly an accepted type for that value.

The contrary to implicit is explicit. This notion shares similarities with hidden features and collateral features.

```php
<?php

function foo($object) {
    $object->p = 1;
}

$object = new stdClass();
foo($object);
echo $object->p; 

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Implicit_type_conversion](https://en.wikipedia.org/wiki/Implicit_type_conversion)

## See Also
- [Type conversion (Wikipedia)](https://en.wikipedia.org/wiki/Type_conversion)
- [Type Juggling](https://www.php.net/manual/en/language.types.type-juggling.php)

## Related
- [Explicit](/features/explicit.md)
- [Appeasement Pattern](/features/appeasement-pattern.md)
- [Distributed State](/features/distributed-state.md)
- [Hidden State](/features/hidden-state.md)
- [Implicit State](/features/implicit-state.md)

