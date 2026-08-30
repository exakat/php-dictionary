---
type: "concept"
title: "Fallback"
description: "A fallback refers to a backup plan or default behavior that is executed when the primary operation fails, is unavailable, or doesn't meet certain conditions."
resource: "https://www.merriam-webster.com/dictionary/fallback"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Fallback

A fallback refers to a backup plan or default behavior that is executed when the primary operation fails, is unavailable, or doesn't meet certain conditions. It ensures that the system or application can function, either by default, or if something unexpected happens.

+ Fallback to global is the mechanism that uses PHP native function, in the global namespace, when they are not found in the local namespace
+ Fallback constant to string was a mechanism to use the literal constant name instead of its value, when the constant was not defined. It is now removed
+ A default value is a fallback mechanism.

```php
<?php

    namespace A;
    
    // function A\strtolower does not exists, so it uses \strtolower
    echo strtolower('ABC');

?>
```

## Documentation
- [https://www.merriam-webster.com/dictionary/fallback](https://www.merriam-webster.com/dictionary/fallback)

## See Also
- [Default parameter values](https://www.php.net/manual/en/functions.arguments.php#functions.arguments.default)
- [Null coalescing operator](https://www.php.net/manual/en/language.operators.comparison.php#language.operators.comparison.coalesce)

## Related
- [Fallback To Global](/features/fallback-to-global.md)
- [Fallback Function](/features/fallback-function.md)
- [Default Value](/features/default-value.md)
- [Stale-While-Revalidate](/features/stale-while-revalidate.md)
- [Resilience](/features/resilience.md)

