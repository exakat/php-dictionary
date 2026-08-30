---
type: "concept"
title: "Conditional"
description: "Conditional means that some condition must be met for something to happen or to be."
resource: "https://www.php.net/manual/en/language.control-structures.php"
tags: ["concept", "adjective"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Conditional

Conditional means that some condition must be met for something to happen or to be. While conditions are used everywhere in code, some syntax are seen as fixed, but may be conditioned too.

+ Constant value: constant definitions, both global and class, may use the ternary operator and have a value depending on the context of execution.
+ Definition: old technique used to include definitions of classes, functions, etc. depending on versions. This is now replaced by holding all definitions in different namespaces: the namespace are conditionally used.
+ Constant definition: when specifying a global constant with ``const``, the definition cannot be conditional: it cannot be set in a ``if-then`` block, or any other block, including functions or closures.

```php
<?php

    // Conditioned constant value
    const A = PHP_OS == 'Linux' ? 'PHP On Linux' : 'PHP Not On Linux';
    
    if (PHP_OS == 'Linux') {
        // This is a syntax error
        const B = 1; 
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.control-structures.php](https://www.php.net/manual/en/language.control-structures.php)

## See Also
- [PHP: The if Statement](https://www.php.net/manual/en/control-structures.if.php)
- [match](https://www.php.net/manual/en/control-structures.match.php)

## Related
- [Const](/features/const.md)
- [Condition](/features/condition.md)

