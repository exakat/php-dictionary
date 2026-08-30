---
type: "PHP Feature"
title: "Visibility"
description: "Properties, methods and classes may have a visibility."
resource: "https://www.php.net/manual/en/language.oop5.visibility.php"
tags: ["feature", "method", "property", "class-constant", "visibility"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Visibility

Properties, methods and classes may have a visibility. It limits the scope of the definition:

+ ``private``: to the current class
+ ``protected``: to the current class hierarchy, parents and children classes
+ ``public``: to all the code
+ ``var``: to all the code, deprecated

The default visibility is ``public``. The visibility may be omitted when using another option, such as ``final``, ``static``. It is recommended to always specify the visibility explicitly.

Visibility may no change, unless when overwriting it with a trait, or in a child class.

Visibility may be by-passed with class-invasion, where an object of one class may access another object's property, as long as they are from the same class or family.

```php
<?php

    class X {
        public const X = 1;
        
        private $property;
        
        protected function foo() {}
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.visibility.php](https://www.php.net/manual/en/language.oop5.visibility.php)

## See Also
- [Understanding The Concept Of Visibility In Object Oriented PHP](https://torquemag.io/2016/05/understanding-concept-visibility-object-oriented-php/)
- [PHP Tricks: Access control bypass](https://peakd.com/hive-168588/@crell/php-tricks-access-control-bypass)

## Related
- [Properties](/features/property.md)
- [Method](/features/method.md)
- [Static Constant](/features/class-constant.md)
- [Class Constants Visibility](/features/class-constant-visibility.md)
- [Class Invasion](/features/class-invasion.md)
- [Object](/features/object.md)
- [Private Visibility](/features/private.md)
- [Protected Visibility](/features/protected.md)
- [Public Visibility](/features/public.md)
- [Var](/features/var.md)
- [Asymmetric Visibility](/features/asymmetric-visibility.md)
- [Constructor](/features/constructor.md)
- [Readable](/features/readable.md)
- [Writable](/features/writable.md)
- [get_object_vars()](/features/get_object_vars.md)
- [Class Getter Method](/features/getter.md)
- [Variable Scope](/features/variable-scope.md)
- [Writeable](/features/writeable.md)
- [Permission](/features/permission.md)
- [__callStatic() Method](/features/__callstatic.md)
- [Data Hiding](/features/data-hiding.md)
- [Modifier](/features/modifier.md)
- [Module System with Explicit Exports](/features/module-system.md)
- [Package-Level](/features/package-visibility.md)

