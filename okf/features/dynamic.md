---
type: "concept"
title: "Dynamic"
description: "Dynamic is a common concept, and may be used in three distinct situations: + Dynamic call, to call a function or method whose name is in a variable + Dynamic constant, to call a constant whose name is in a variable + Dynamic property, to access a property whose name is in a variable + Dynamic loading, for PHP to load an extension after the start of execution + Dynamic variable, to access a variable whose name is in another variable."
resource: "https://www.php.net/manual/en/language.variables.variable.php"
tags: ["concept", "dynamic"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Dynamic

Dynamic is a common concept, and may be used in three distinct situations: 

+ Dynamic call, to call a function or method whose name is in a variable
+ Dynamic constant, to call a constant whose name is in a variable
+ Dynamic property, to access a property whose name is in a variable
+ Dynamic loading, for PHP to load an extension after the start of execution
+ Dynamic variable, to access a variable whose name is in another variable.

```php
<?php

    // Dynamic call of a variable
    $a = K;
    $x = 'a';
    echo $$x; // K
    
    const A = 1;
    $name = 'A';
    echo constant($name); // 1

?>
```

## Documentation
- [https://www.php.net/manual/en/language.variables.variable.php](https://www.php.net/manual/en/language.variables.variable.php)

## See Also
- [All the Dynamic Syntaxes in PHP](https://www.exakat.io/en/all-the-dynamic-syntaxes-in-php/)

## Related
- [Dynamic Call](/features/dynamic-call.md)
- [Dynamic Constant](/features/dynamic-constant.md)
- [Dynamic Properties](/features/dynamic-property.md)
- [Dynamic Loading](/features/dynamic-loading.md)
- [Dynamic Variable](/features/dynamic-variable.md)
- [Variable Variables](/features/variable-variable.md)
- [static](/features/static.md)
- [Dynamic Class Constant](/features/dynamic-class-constant.md)
- [Dynamic Method](/features/dynamic-method.md)

