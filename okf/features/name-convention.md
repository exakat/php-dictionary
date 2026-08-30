---
type: "concept"
title: "Name Conventions"
description: "A naming convention is a way to write a name for a structure, with a specific format."
resource: "https://www.php.net/manual/en/language.variables.basics.php"
tags: ["concept", "name"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Name Conventions

A naming convention is a way to write a name for a structure, with a specific format.

There are technical conventions, which leads the PHP engine to refuse a name, such as starting a class name with a number.

There are developer conventions, which are a community practice, that fits within the technical conventions. For example, constants are written in upper case.

Here are technical conventions for PHP: 

+ Variables, properties: they start with a ``$`` sign, followed by a letter or underscore, then by letters, digits and underscore. There have no length limit. As a regex: ``$[a-zA-Z_][a-zA-Z0-9_]*``
+ Functions, methods: they start with a letter or underscore, then by letters, digits and underscore. There have no length limit. As a regex: ``[a-zA-Z_][a-zA-Z0-9_]*``
+ Classes, traits, enumerations, interfaces: they start with a letter or underscore, then by letters, digits and underscore. There have no length limit. As a regex: ``[a-zA-Z_][a-zA-Z0-9_]*``
+ Constants, global or class: they start with a letter or underscore, then by letters, digits and underscore. There have no length limit. As a regex: ``[a-zA-Z_][a-zA-Z0-9_]*``
+ Array index: they must be valid strings or integers.

```php
<?php

    // here, foo is the name of a function
    function foo() {}
    
    // the name is used to call the function
    foo();

?>
```

## Documentation
- [https://www.php.net/manual/en/language.variables.basics.php](https://www.php.net/manual/en/language.variables.basics.php)

## See Also
- [Naming convention (programming) (Wikipedia)](https://en.wikipedia.org/wiki/Naming_convention_(programming))
- [PSR-1: Basic Coding Standard](https://www.php-fig.org/psr/psr-1/)

## Related
- [Namespaces](/features/namespace.md)
- [Anonymous](/features/anonymous.md)
- [Case Sensitivity](/features/case-sensitivity.md)
- [Namespace Name](/features/namespace-name.md)
- [Structure](/features/structure.md)
- [Word Combination](/features/word-combinaison.md)
- [Close Naming](/features/close-naming.md)
- [Naming Conflict](/features/naming-conflict.md)
- [Reserved Names](/features/reserved-name.md)
- [Semantics](/features/semantics.md)
- [Static Constant](/features/class-constant.md)

