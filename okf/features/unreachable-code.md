---
type: "concept"
title: "Unreachable Code"
description: "Unreachable code refers to a section of code within a program that can never be executed during the program's runtime."
resource: "https://en.wikipedia.org/wiki/Unreachable_code"
tags: ["concept", "code smell", "static analysis"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Unreachable Code

Unreachable code refers to a section of code within a program that can never be executed during the program's runtime. It means that the code is written in such a way that it can never be reached or accessed by the program's execution flow.

Unreachable code can occur due to several reasons:

+ Conditional statements
+ Early return statements
+ Infinite loops
+ Branching with goto, yield, break, return, die...

```php
<?php

    $a = 1;
    echo foo($a);
    
    exit; 
    
    // This is unreachable code, as it will never be executed
    echo $a; 
    
    // This is not unreachable, as PHP scoops the definition at linting time
    function foo($s) {
        return strtolower($s);
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Unreachable_code](https://en.wikipedia.org/wiki/Unreachable_code)

## See Also
- [Dead-code elimination](https://en.wikipedia.org/wiki/Dead-code_elimination)

## Related
- [Dead Code](/features/dead-code.md)

