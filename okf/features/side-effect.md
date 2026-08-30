---
type: "concept"
title: "Side Effect"
description: "A side effect refers to any change in the state of a program or system that occurs when a function or expression is evaluated, beyond simply returning a value."
resource: "https://en.wikipedia.org/wiki/Side_effect_(computer_science)"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Side Effect

A side effect refers to any change in the state of a program or system that occurs when a function or expression is evaluated, beyond simply returning a value. Side effects are actions that affect something outside the function's scope, such as modifying a global variable, reading or writing to a database, files or any remote API, displaying data, or modifying the environment.

Side effects are a concept of programming in general. It is important in functional programming, where functions without side effects are called pure.

Side effect has also the literal meaning of a consequence to an action or a situation, similar to collateral.

```php
<?php

    // A pure function, with no side effect 
    function foo($a, $b) {
        return $a + $b;
    }
    
    // An impure function
    function goo($a, $b) {
        echo $a;
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Side_effect_(computer_science)](https://en.wikipedia.org/wiki/Side_effect_(computer_science))

## See Also
- [side-effects-detector](https://github.com/staabm/side-effects-detector)

## Related
- [Pure Function](/features/pure-function.md)
- [Functional Programming](/features/functional-programming.md)
- [Determinism](/features/determinism.md)
- [Event Sourcing](/features/event-sourcing.md)
- [Impure Function](/features/impure-function.md)
- [Effect System](/features/effect-system.md)
- [Fire-and-forget](/features/fire-and-forget.md)
- [Global State](/features/global-state.md)
- [Mutable State](/features/mutable-state.md)

## Details
- Packagist: [staabm/side-effects-detector](https://packagist.org/packages/staabm/side-effects-detector)

