---
type: "concept"
title: "Semantics"
description: "Semantics is related with the meaning of things."
resource: "https://en.wikipedia.org/wiki/Semantics_(computer_science)"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Semantics

Semantics is related with the meaning of things. In particular, when naming structures, such as variables, classes, methods, properties, goto labels, use alias, functions or constants, the name should be meaningful. 

While naming doesn't impact the code itself, as names are free, they do have a serious impact on human understanding of the code. 

It is also possible to find inconsistencies between the name and its usage. For example, when a name is used for an unexpected type.

```php
<?php

    function foo(User $commenter) { }

    // Inconsistence between the parameter name and its type
    function bar(array $string) { }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Semantics_(computer_science)](https://en.wikipedia.org/wiki/Semantics_(computer_science))

## See Also
- [PHP syntax and semantics](https://en.wikipedia.org/wiki/PHP_syntax_and_semantics)
- [KPHP: An Executable Formal Semantics for PHP](https://phpsemantics.org/)

## Related
- [Name](/features/name.md)
- [Name Conventions](/features/name-convention.md)
- [Typo](/features/typo.md)

