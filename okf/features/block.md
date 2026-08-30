---
type: "PHP Feature"
title: "Block"
description: "Blocks are zero, one or more instructions, grouped together with or without curly brackets."
resource: "https://en.wikipedia.org/wiki/Block_(programming)"
tags: ["syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Block

Blocks are zero, one or more instructions, grouped together with or without curly brackets.

A number of commands require blocks of instructions: ``namespace``, ``use``, ``function``, ``class``, ``trait``, ``interface``, ``enum``, ``closure``, ``switch``, ``match``, ``for``, ``foreach``, ``while``, ``do..while``, ``if-then``.  

Blocks may require brackets, like for ``class``, ``switch()``, ``function bodies``; they may be optional, like with ``case``, ``arrow-functions``, ``namespace`` or loops. 

A block may live on its own: it has no impact on the code, although it might be used to arbitrarily group instructions.

```php
<?php

function foo($a) {
    if ($a) {
        $b = 1;
    } else 
        $b = 2;
        
    return $b;
}
?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Block_(programming)](https://en.wikipedia.org/wiki/Block_(programming))

## See Also
- [Why Programming Languages Use Curly Braces](https://codefinity.com/blog/Why-Programming-Languages-Use-Curly-Braces)
- [A Brief History of the Curly Brace in Programming](https://medium.com/better-programming/a-brief-history-of-the-curly-brace-in-programming-5b3eacdc3f7a)

## Related
- [Body](/features/body.md)
- [Docblock](/features/docblock.md)
- [Bracketless](/features/bracketless.md)
- [Curly Brackets](/features/curly-bracket.md)

