---
type: "concept"
title: "Depth"
description: "Depth is a measure of how many an operation has been repeatedly applies, over and over."
resource: "https://en.wikipedia.org/wiki/Recursion_(computer_science)"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Depth

Depth is a measure of how many an operation has been repeatedly applies, over and over. 

It applies to several concepts: 

+ Multi-dimensional array depth: ``$array['d1']['d2']['d3']['d4']``
+ Recursion depth: see example
+ Nested loop depth: number of loops inside a loop
+ Callstack depth: number of functions calling another one
+ Object inheritance depth: the maximum number of extension levels in a class hierarchy

Depth might be limited, when it is prevented from going beyond a certain level, or unlimited, when there is no such limit. For example, xdebug offers a directive called ``xdebug.max_nesting_level`` that limits nesting depth.

```php
<?php

    // The recursion depth is limited to 5
    function foo($level = 0) { 
        if ($level < 5) { 
            return foo($level + 1);
        } 
        return 1;
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Recursion_(computer_science)](https://en.wikipedia.org/wiki/Recursion_(computer_science))

## See Also
- [Understanding Recursion Tree Depth and Logarithmic Levels](https://medium.com/@ilakk2023/understanding-recursion-tree-depth-and-logarithmic-levels-9f3747dabedf)
- [Fixing PHP Fatal error: Nesting level too deep](https://www.slingacademy.com/article/fixing-php-fatal-error-nesting-level-too-deep-recursive-dependency/)

## Related
- [Callstack](/features/callstack.md)

