---
type: "PHP Feature"
title: "Control Structures"
description: "Control structures are PHP statements that control the flow of execution."
resource: "https://www.php.net/manual/en/language.control-structures.php"
tags: ["syntax", "control structure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Control Structures

Control structures are PHP statements that control the flow of execution. 

+ if / elseif / else if
+ while
+ do-while
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

Usually, instructions and commands are executed one after another. With control structures, this flow is changed and the execution will go to another part of the code for its next step. For example, inside a loop, when PHP encounters a break command, it will then execute the next command after the loop, instead of the next command sequentially.

PHP offers each control structure in a curly-brace form and, for use inside templates mixed with HTML, an alternative syntax that replaces braces with a colon and matching ``end...;`` keywords ``endif``, ``endwhile``, ``endfor``, ``endforeach``, ``endswitch``. Both forms are functionally equivalent; the alternative syntax is mostly a readability choice when PHP blocks are interleaved with markup.

Control structures cannot be assigned to variables, passed as callbacks, or invoked dynamically the way functions can: their names are reserved keywords parsed directly by the engine, which is what allows them to alter the normal top-to-bottom execution order in the first place.

```php
<?php

    if (rand(0, 1) > 0) {
        print 'Hello, world.';
    } else {
        print 'World : hello!';
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.control-structures.php](https://www.php.net/manual/en/language.control-structures.php)

## See Also
- [PHP. Control Structures](https://alishoff.com/blog/500)

## Related
- [foreach()](/features/foreach.md)
- [For](/features/for.md)
- [declare()](/features/declare.md)
- [Match](/features/match.md)
- [Alternative Syntax](/features/alternative-syntax.md)
- [Coding Conventions](/features/coding-convention.md)

