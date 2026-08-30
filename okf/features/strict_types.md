---
type: "PHP Feature"
title: "strict_types"
description: "``strict_types`` is an execution directive, that makes PHP more strict when applying the types."
resource: "https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.strict"
tags: ["configuration", "declare", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# strict_types

``strict_types`` is an execution directive, that makes PHP more strict when applying the types. In particular, it doesn't cast scalar values automatically, but raise an error. 

``strict_types`` is an option per file, and is set with the ``declare()`` function.

```php
<?php

    declare(strict_types=1);
    
    function foo(int $a) {}
    
    foo(1);
    foo(1.3);
    //Fatal error: Uncaught TypeError: foo(): Argument #1 ($a) must be of type int, float given,

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.strict](https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.strict)

## See Also
- [PHP strict_types](https://www.phptutorial.net/php-tutorial/php-strict_types/)
- [The way declare(strict_types=1) works in PHP](https://dev.to/rocksheep/the-way-stricttypes-works-in-php-eb7)
- [What is PHP's declare(strict_types=1); and why you should use it](https://backendtea.com/post/php-declare-strict-types/)
- [PHP RFC: Unify PHP's typing modes (aka remove strict_types declare)](https://github.com/Girgias/unify-typing-modes-rfc)

## Related
- [Type System](/features/type.md)
- [declare()](/features/declare.md)
- [__toString() Method](/features/__tostring.md)
- [Type Checking](/features/type-checking.md)
- [Type Coercion](/features/coercion.md)
- [Strict](/features/strict.md)
- [Type System](/features/type-system.md)
- [Type Widening](/features/type-widening.md)

## Details
- PHP since: 7.0

