---
type: "PHP Feature"
title: "Callstack"
description: "Every time a function, or method, is called, PHP enters a new context."
resource: "https://en.wikipedia.org/wiki/Call_stack"
tags: ["internal", "debug"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Callstack

Every time a function, or method, is called, PHP enters a new context. When the function call is finished, PHP exits that context. To keep track of the previous contexts, PHP stores them in a stack: that way, it pops the last context, and goes on.

The callstack is usually not visible explicitly. It may be accessed with the function ``debug_print_backtrace()``, for debugging purposes. 

The callstack is an important element of the execution path of PHP. In particular, the callstack should not be too deep. There are also means to limit the depth of the callstack, to avoid running into infinite recursions.

```php
<?php

function foo() {
    goo();
}

function goo() {
    hoo();
}

function hoo() {
    debug_print_backtrace();
}

foo();

// Displays 
// #0 /in/lkZjr(8): hoo()
// #1 /in/lkZjr(4): goo()
// #2 /in/lkZjr(15): foo()
?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Call_stack](https://en.wikipedia.org/wiki/Call_stack)

## See Also
- [PHP: debug_backtrace vs. debugger call stack](https://medium.com/@rob.fulwell/php-debug-backtrace-vs-debugger-call-stack-e13dbeebde71)

## Related
- [Stack](/features/stack.md)
- [Backtrace](/features/backtrace.md)
- [Debug](/features/debug.md)
- [Depth](/features/depth.md)

