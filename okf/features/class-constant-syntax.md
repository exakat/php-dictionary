---
type: "PHP Feature"
title: "Class Constant Syntax"
description: "The class constant syntax is the full name of a class constant, formalized in a string."
resource: "https://www.php.net/manual/en/language.oop5.constants.php"
tags: ["constant"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Class Constant Syntax

The class constant syntax is the full name of a class constant, formalized in a string. It is ``namespace\class-name::constant-name``.

That representation requires the name of the class to include the full namespace path, with or without the leading ``\``.

The class constant syntax does not work with local ``use`` expressions.

The class constant syntax works with the ``constant()`` and ``defined()`` functions.

```php
<?php

    namespace X\Y;
    
    use A as D;
    
    class A {
        const B = 'C';
    }
    
    echo constant('\X\Y\A::B');
    echo constant('X\Y\A::B');
    echo constant('D::B'); // error, no such class as D

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.constants.php](https://www.php.net/manual/en/language.oop5.constants.php)

## See Also
- [PHP: Scope Resolution Operator (::)](https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php)
- [Constants](https://www.php.net/manual/en/language.constants.php)

## Related
- [Static Constant](/features/class-constant.md)
- [Constants](/features/constant.md)
- [defined()](/features/defined.md)
- [constant()](/features/constant-function.md)
- [Dynamic Constant](/features/dynamic-constant.md)

