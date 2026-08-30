---
type: "concept"
title: "Hoisting"
description: "Hoisting is a language feature where declarations are automatically moved to the top of their scope before code execution."
resource: "https://developer.mozilla.org/en-US/docs/Glossary/Hoisting"
tags: ["concept", "unsupported", "compilation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Hoisting

Hoisting is a language feature where declarations are automatically moved to the top of their scope before code execution. It is notably a JavaScript feature and not a PHP feature.

PHP does not support hoisting for variables: a variable must be assigned before it is read, or it will be undefined.

PHP functions are pre-compiled and can be called before their textual declaration in the same file, which may look like hoisting but is actually the result of PHP's two-pass compilation model.

PHP classes are not hoisted either: a class must be declared, autoloaded, before it is instantiated.

```php
<?php

    // This works: functions are pre-compiled
    greet();
    
    function greet() { echo 'Hello'; }
    
    // This does NOT work: variables are not hoisted
    echo $message; // Undefined variable
    
    $message = 'Hello';

?>
```

## Documentation
- [https://developer.mozilla.org/en-US/docs/Glossary/Hoisting](https://developer.mozilla.org/en-US/docs/Glossary/Hoisting)

## See Also
- [What is Hoisting in JavaScript?](https://www.freecodecamp.org/news/what-is-hoisting-in-javascript/)

## Related
- [Class Hoisting](/features/class-hoisting.md)
- [Class Autoloading](/features/autoload.md)
- [Undefined](/features/undefined.md)
- [Cache](/features/cache.md)
- [Order Of Execution](/features/order-of-execution.md)

