---
type: "PHP Feature"
title: "Execution Time"
description: "Execution time is a phase of PHP processing, where the source code is executed."
resource: "https://www.php.net/manual/en/info.configuration.php#ini.max-execution-time"
tags: ["syntax", "execution"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Execution Time

Execution time is a phase of PHP processing, where the source code is executed. It highly depends on the order of execution of the instructions. 

At that time, PHP takes the commands one after the other, and execute them. It allocates memory for data, and definitions. 

Execution time is related to compile time. Objects, constants when created with ``define()``, function calls, generators, inclusion, exceptions are execution time elements.

On the other hand, classes, constants when created with ``const``, functions, etc. are created at linting time.

```php
<?php

    const A = 'a';
    function foo(int $a = A) {
        echo $a;
    }
    
    foo(1);  // 1
    foo();   // Error
    //Uncaught TypeError: foo(): Argument #1 ($a) must be of type int, string given, 

?>
```

## Documentation
- [https://www.php.net/manual/en/info.configuration.php#ini.max-execution-time](https://www.php.net/manual/en/info.configuration.php#ini.max-execution-time)

## See Also
- [define](https://www.php.net/manual/en/function.define.php)
- [PHP manual: set_time_limit](https://www.php.net/manual/en/function.set-time-limit.php)

## Related
- [Const](/features/const.md)
- [define()](/features/define.md)
- [Compile Time](/features/compile-time.md)
- [Late Static Binding](/features/late-static-binding.md)
- [max_execution_time](/features/max_execution_time.md)

