---
type: "concept"
title: "Jump"
description: "A jump typically refers to any non-linear control flow, where the program skips from one part of the code to another."
resource: "https://www.php.net/manual/en/language.control-structures.php"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Jump

A jump typically refers to any non-linear control flow, where the program skips from one part of the code to another. In fact, it is bypassing the normal sequential execution.

There are a few constructs that qualify as jumps: ``goto``, ``break``, ``continue``, ``yield``, ``yield from``, ``throw``, ``return``.

```php
<?php

    function foo(int $a) {
        // jumps out of the method
        if ($a > 10) { return; }
        
        foreach(range(1, 10) as $i) {
            if (doSomething($i, $a)) {
                // jumps out of the loop
                break 1; 
            }
        }
        
        // normal execution
        return $a + 1;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.control-structures.php](https://www.php.net/manual/en/language.control-structures.php)

## See Also
- [goto](https://www.php.net/manual/en/control-structures.goto.php)
- [Control flow (Wikipedia)](https://en.wikipedia.org/wiki/Control_flow)

## Related
- [Goto](/features/goto.md)
- [Return](/features/return.md)
- [Break](/features/break.md)
- [Continue](/features/continue.md)
- [throw](/features/throw.md)
- [Control Flow](/features/control-flow.md)
- [If Then Else](/features/if-then.md)
- [yield from Keyword](/features/yield-from.md)
- [Yield](/features/yield.md)

