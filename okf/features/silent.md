---
type: "PHP Feature"
title: "Silent Behavior"
description: "Silent behaviors are expressions that do not raise any error, yet perform a transformation on data, with or without the programmer's knowledge."
resource: "https://en.wikipedia.org/wiki/Defensive_programming"
tags: ["pattern"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Silent Behavior

Silent behaviors are expressions that do not raise any error, yet perform a transformation on data, with or without the programmer's knowledge.

Silent behaviors also describes extra actions that are taken by PHP, without signaling it or making it obvious.

Since they are silent, their usage or absence of usage is never signaled and the code may stay in the repository long before being discovered and removed or fixed.

```php
<?php

    // Importing a non existent class
    use Unknown\Namespace\theClass;
    
    // Typing with a non-existent class, or a trait, but still allowing other types
    function foo(UndefinedType|string $t) : \aTrait|string {}
    
    // The whole try catch is now useless.
    try {
    
    } catch (unknownException $e) {}
    
    // null is automatically turned into an int, so 0
    $a = [null => 1];
    echo $a[0]; // displays 1

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Defensive_programming](https://en.wikipedia.org/wiki/Defensive_programming)

## See Also

## Related
- [Type Juggling](/features/type-juggling.md)
- [Typo](/features/typo.md)
- [max_input_vars](/features/max_input_vars.md)

