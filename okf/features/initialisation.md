---
type: "PHP Feature"
title: "Initialisation"
description: "Initialisation is the process to unconditionally give a value to a variable, or any container, before its usage."
resource: "https://en.wikipedia.org/wiki/Initialization_(programming)"
tags: ["variable", "property"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Initialisation

Initialisation is the process to unconditionally give a value to a variable, or any container, before its usage. 

Initialisation has a dedicated syntax for properties, parameters and static variables. There is no dedicated syntax for variable initialisation: they are created when needed, with a default value of NULL. They also emits a warning in that case.

Initialisation ensures that a variable is hold a sane value before any usage. This makes it important for security purposes too.

```php
<?php

function foo($i = 0) {
    static $var = 3;
    
    // implicit initialisation with null, which is later cast to 0.
    $x += 2;
}
?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Initialization_(programming)](https://en.wikipedia.org/wiki/Initialization_(programming))

## See Also
- [Constructor (object-oriented programming) (Wikipedia)](https://en.wikipedia.org/wiki/Constructor_(object-oriented_programming))
- [Uninitialized variable (Wikipedia)](https://en.wikipedia.org/wiki/Uninitialized_variable)

## Related
- [Definition](/features/definition.md)
- [Uninitialized](/features/uninitialized.md)

