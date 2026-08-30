---
type: "concept"
title: "Writable"
description: "Something is writable when a new value may be assigned to it, in the correct context."
resource: "https://www.php.net/manual/en/function.is-writable.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Writable

Something is writable when a new value may be assigned to it, in the correct context. For example, a variable is writable, as it may be assigned a new value in the local context.

Variable, properties, given the correct visibility, static properties, array elements are writable. 

On the other hand, constants, method calls, function calls, or instantiation are not writable: they provide a value, but do not accept to be written to.

```php
<?php

$x = 3;
$y = $x + 4;

// syntax error
// new x = 3;

?>
```

## Documentation
- [https://www.php.net/manual/en/function.is-writable.php](https://www.php.net/manual/en/function.is-writable.php)

## See Also
- [PHP: Variables](https://www.php.net/manual/en/language.variables.php)
- [Assignment (computer science) - Wikipedia](https://en.wikipedia.org/wiki/Assignment_(computer_science))

## Related
- [Visibility](/features/visibility.md)
- [Variables](/features/variable.md)
- [Static Property](/features/static-property.md)
- [Properties](/features/property.md)
- [Container](/features/container.md)
- [Array Element](/features/array-element.md)
- [Readable](/features/readable.md)

