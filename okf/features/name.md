---
type: "concept"
title: "Name"
description: "A name is a generic coding concept: it is a short and human handle to designate a larger or variable structure."
resource: "https://www.php.net/manual/en/language.namespaces.php"
tags: ["concept", "name", "semantics", "readability"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Name

A name is a generic coding concept: it is a short and human handle to designate a larger or variable structure. 

PHP assigns names to many coding structures: variables, constants, functions, classes, interfaces, traits, enumerations, methods, properties, goto labels. Most of these have also an anonymous version, where the same structure may be created without a name. 

Names usually require to be unique within a piece of code: this is the case for structures which have a definition, such as a class or a function. To avoid such conflict, it is recommended to use namespaces.

PHP are famously very flexible with names: they usually accept a letter, underscore as first element, then letters, numbers and underscores, as much as needed. They also accept any unicode above code 127, or 0x80, which means that emojis, characters, symbols and many languages are usable as part of a name.

```php
<?php

    // here, foo is the name of a function
    function foo() {}
    
    // the name is used to call the function
    foo();

?>
```

## Documentation
- [https://www.php.net/manual/en/language.namespaces.php](https://www.php.net/manual/en/language.namespaces.php)

## See Also
- [When PHP Meet Unicode: A Tour of Identifiers Beyond ASCII](https://www.exakat.io/when-php-meet-unicode-a-tour-of-identifiers-beyond-ascii/)

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

