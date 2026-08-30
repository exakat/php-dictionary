---
type: "PHP Feature"
title: "constant()"
description: "The ``constant()`` function is a native function, which provide the value of a declared global constant, a class constant or an enumeration case."
resource: "https://www.php.net/constant"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# constant()

The ``constant()`` function is a native function, which provide the value of a declared global constant, a class constant or an enumeration case.

For class constant and enumeration cases, it may be replaced with the dynamic class constant syntax, introduced in version 8.3.

```php
<?php

    const A = 1;
    
    echo constant('A');
    
    enum E: string {
        case B = 'abc';
        const C = 'def';
    }
    
    echo constant('E::B')->value; // abc
    echo constant('E::C');        // def

?>
```

## Documentation
- [https://www.php.net/constant](https://www.php.net/constant)

## See Also
- [define](https://www.php.net/manual/en/function.define.php)
- [defined](https://www.php.net/manual/en/function.defined.php)

## Related
- [Dynamic Class Constant](/features/dynamic-class-constant.md)
- [Class Constant Syntax](/features/class-constant-syntax.md)
- [Dynamic Constant](/features/dynamic-constant.md)

