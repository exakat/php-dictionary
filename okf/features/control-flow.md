---
type: "PHP Feature"
title: "Control Flow"
description: "Control flow structures direct the way PHP executes the statements."
resource: "https://www.php.net/manual/en/language.control-structures.php"
tags: ["syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Control Flow

Control flow structures direct the way PHP executes the statements. For example, a loop repeats the same statements several times; a goto instruction jumps to another part of the code; a if-then statement applies a block of code or another, depending on a condition.

+ if
+ else
+ elseif/else if
+ Alternative syntax for control structures
+ while
+ do...while
+ for
+ foreach
+ break
+ continue
+ switch
+ match
+ declare
+ return
+ ``require()``
+ ``include()``
+ ``require_once()``
+ ``include_once()``
+ goto

Control flow structures can't be called dynamically: they have to be hardcoded, or nested in a closure or other function.

Each of these constructs answers a different question about the order of execution: conditionals, ``if``, ``elseif``, ``match``, choose between branches; loops, ``while``, ``do...while``, ``for``, ``foreach``, repeat a block until a condition changes; jump statements, ``break``, ``continue``, ``return``, ``goto``, leave the current structure early or transfer control elsewhere; and the file-inclusion constructs, ``require``, ``include``, and their ``_once`` variants, bring another script's control flow into the current one.

Understanding control flow is central to reading any PHP program, since it determines which statements actually run for a given input, in what order, and how many times. Poorly structured control flow, such as deeply nested conditionals or unbounded loops, is a common source of bugs and a frequent target of static analysis and refactoring.

```php
<?php

    if ($a === 1) { 
        $b = 2;
    } else {
        $b = 3;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.control-structures.php](https://www.php.net/manual/en/language.control-structures.php)

## See Also
- [PHP flow control](https://zetcode.com/php/flowcontrol/)
- [PHP Control Flow](https://www.codeguage.com/v1/courses/php/control-flow)

## Related
- [Statement](/features/statement.md)
- [Loops](/features/loop.md)
- [Semicolon ;](/features/semicolon.md)
- [If Then Else](/features/if-then.md)
- [While](/features/while.md)
- [Do While](/features/do-while.md)
- [For](/features/for.md)
- [foreach()](/features/foreach.md)
- [Break](/features/break.md)
- [Continue](/features/continue.md)
- [Switch](/features/switch.md)
- [Match](/features/match.md)
- [declare()](/features/declare.md)
- [Return](/features/return.md)
- [Inclusions](/features/inclusion.md)
- [Goto](/features/goto.md)
- [Jump](/features/jump.md)

