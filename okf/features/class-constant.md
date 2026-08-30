---
type: "PHP Feature"
title: "Static Constant"
description: "Static constants are constants that are defined inside a class, an interface, a trait since PHP 8.2, or an enumeration; depending on the containing structure, they are also called an interface constant, a trait constant, or an enum constant."
resource: "https://www.php.net/manual/en/language.oop5.constants.php"
tags: ["class", "constant", "feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Static Constant

Static constants are constants that are defined inside a class, an interface, a trait since PHP 8.2, or an enumeration; depending on the containing structure, they are also called an interface constant, a trait constant, or an enum constant.

Static constants have a visibility. Visibility may be ``public``, ``protected``, or ``private``. By default, and for backward compatibility, a constant without a visibility is ``public``.

Static constants may also be overwritten by child classes. They can also use the ``final`` keyword, to avoid such behavior.

Static constants are defined at coding time, and cannot be changed later, nor dynamically created.

Static constant syntax is the same as for enumeration cases.

```php
<?php

    class X {
        public  const FOO = 1;
        private const BAR = 2;
        private const string TYPE = 'valid';
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.constants.php](https://www.php.net/manual/en/language.oop5.constants.php)

## See Also
- [Everything You Should Know About PHP Const in Class](https://pangea.ai/resources/everything-you-should-know-about-php-const-in-class)
- [Class Constants](https://www.codewithharry.com/tutorial/php-class-constants)
- [PHP 8.3 Typed Constants in Production](https://dev.to/ahmet_gedik778845/php-83-typed-constants-in-production-2cpa)

## Related
- [Visibility](/features/visibility.md)
- [Final Keyword](/features/final.md)
- [Constants In Trait](/features/constant-in-trait.md)
- [Constants](/features/constant.md)
- [Dynamic Constant](/features/dynamic-constant.md)
- [Special Constant](/features/special-constant.md)
- [Class Constant Syntax](/features/class-constant-syntax.md)
- [define()](/features/define.md)
- [Literal](/features/literal.md)
- [New In Initializers](/features/new-in-initializer.md)
- [Anonymous Constant](/features/anonymous-constant.md)
- [Constant Case](/features/constant-case.md)
- [Dynamic Class Constant](/features/dynamic-class-constant.md)
- [Typed Constant](/features/typed-constant.md)
- [Name Conventions](/features/name-convention.md)

