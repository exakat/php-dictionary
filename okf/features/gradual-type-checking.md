---
type: "type"
title: "Gradual Type Checking"
description: "Gradual type checking is the progressive introduction of types in a code base."
resource: "https://en.wikipedia.org/wiki/Gradual_typing"
tags: ["type", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Gradual Type Checking

Gradual type checking is the progressive introduction of types in a code base. When a code base is not fully typed, it is in a state of gradual typing. Types are introduced, which leads to various levels of validation and verifications, and a better stability.

Gradual Type Checking ends when the code is all typed: arguments, return types, properties, constants. There might be some ambiguous situations, such as with variables, yields and use.

```php
<?php

    // partially typed function
    function foo(int $i, $b) {
        // some code
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Gradual_typing](https://en.wikipedia.org/wiki/Gradual_typing)

## See Also
- [Gradual Type Checking & Sorbet](https://sorbet.org/docs/gradual)
- [What is Gradual Typing](https://jsiek.github.io/home/WhatIsGradualTyping.html)
- [PHP’s Gradual Typing Journey: From Wild West to Almost Respectable](https://www.javacodegeeks.com/2026/01/phps-gradual-typing-journey-from-wild-west-to-almost-respectable.html)

## Related
- [Type System](/features/type.md)
- [Type Checking](/features/type-checking.md)
- [Type Inference](/features/type-inference.md)
- [Phantom Type](/features/phantom-type.md)
- [Refinement Type](/features/refinement-type.md)
- [Row Polymorphism](/features/row-polymorphism.md)
- [Strict](/features/strict.md)

