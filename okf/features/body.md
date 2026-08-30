---
type: "PHP Feature"
title: "Body"
description: "The body, of a function or a command, is the related block that is commanded by the command."
resource: "https://en.wikipedia.org/wiki/Subroutine"
tags: ["syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Body

The body, of a function or a command, is the related block that is commanded by the command. It is often enclosed in curly brackets ``{  }``, as for function or ``switch``, but sometimes optional, as for ``foreach`` or ``ifthen``.

The body is omitted in a method, when the method is ``abstract``. As an abstract method is only its signature, the body is replaced by a semi colon ``;``.

```php
<?php

    abstract class X {
        function foo() {
            // This block is the body
        }
    
        // No body for an abstract method
        abstract function goo();
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Subroutine](https://en.wikipedia.org/wiki/Subroutine)

## See Also
- [Subroutines/Functions](http://www.cs.emory.edu/~cheung/Courses/561/Syllabus/2-C/subroutine.html)
- [Nested function](https://en.wikipedia.org/wiki/Nested_function)

## Related
- [Block](/features/block.md)
- [Semicolon ;](/features/semicolon.md)

