---
type: "PHP Feature"
title: "Compile Time"
description: "Compile time, also called lint time or linting time, is a phase of PHP processing, where the source code is transformed into execution commands."
resource: "https://en.wikipedia.org/wiki/Compile_time"
tags: ["execution cycle"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Compile Time

Compile time, also called lint time or linting time, is a phase of PHP processing, where the source code is transformed into execution commands.

At that time, PHP figures out the syntax and code organisation, and also validates some aspects of the code, depending on the information availability. The information availability may depend on execution: for example, PHP validates interfaces when they are in the same file as the implementing class, but not when they are in different files, as autoloading needs to happen.

In particular, during compile time, PHP has only visibility on the current constant definitions: no inclusion, no ``define()``. It has no result from any function call, or variables.

Compile time is related to execution time and late static binding. Attributes, default values, constants, with ``const``, are fully compile time structures.

```php
<?php

    const S = 'abc'; 
    
    class y {
        const T = 'abc';
        const string U = z::A ? '2' : 'abc'; // PHP waits for z 
    }
    
    class x {
       private int $a = S;     // execution time 
       //private int $b = y::T;  // compile time error
       private int $c = y::U;  // execution time error
    }
    
?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Compile_time](https://en.wikipedia.org/wiki/Compile_time)

## See Also
- [Difference between runtime exception and compile time exception in PHP](https://www.geeksforgeeks.org/php/difference-between-runtime-exception-and-compile-time-exception-in-php/)

## Related
- [Execution Time](/features/execution-time.md)
- [Late Static Binding](/features/late-static-binding.md)

