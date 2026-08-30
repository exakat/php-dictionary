---
type: "PHP Feature"
title: "Inlining"
description: "Inlining is the process to bring a dependency inside the current code, so as to remove that dependency."
resource: "https://en.wikipedia.org/wiki/Inline_expansion"
tags: ["refactor"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Inlining

Inlining is the process to bring a dependency inside the current code, so as to remove that dependency. 

For example, replacing a constant by its value, as a literal, means that the code works without depending on the external definition. 

On the other hand, such external structure may also have its own life cycle, which is not reflected anymore. It also may hurt readability.

```php
<?php

    const A = 1;
    
    echo A; // dependent code
    
    echo 1; // 

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Inline_expansion](https://en.wikipedia.org/wiki/Inline_expansion)

## See Also
- [Inline method refactoring](https://blog.jetbrains.com/phpstorm/2018/04/inline-method-refactoring/)
- [Inline Method](hhttps://refactoring.guru/inline-method)

## Related
- [Readability](/features/readability.md)
- [Abstraction](/features/abstraction.md)
- [Literal](/features/literal.md)
- [Dependency](/features/dependency.md)
- [Streamlining](/features/streamlining.md)

