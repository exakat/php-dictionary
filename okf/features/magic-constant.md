---
type: "PHP Feature"
title: "Magic Constants"
description: "Constants which hold information about the current location of the code."
resource: "https://www.php.net/manual/en/language.constants.magic.php"
tags: ["magic-constant"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Magic Constants

Constants which hold information about the current location of the code.

Those constants are magic, because they have a constant syntax, yet their value may change, even during the execution of the code. 

+ __LINE__	The current line number of the file.
+ __FILE__	The full path and filename of the file with symlinks resolved. If used inside an include, the name of the included file is returned.
+ __DIR__	The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to ``dirname(__FILE__)``. This directory name does not have a trailing slash unless it is the root directory.
+ __FUNCTION__	The function name, or ``{closure}`` for anonymous functions.
+ __CLASS__	The class name. The class name includes the namespace it was declared in, e.g. ``Foo\Bar``. When used in a trait method, __CLASS__ is the name of the class the trait is used in.
+ __TRAIT__	The trait name. The trait name includes the namespace it was declared in, e.g. ``Foo\Bar``.
+ __METHOD__	The class method name.
+ __NAMESPACE__ The name of the current namespace.
+ __PROPERTY__ The name of the current property hook.

Those constants are case insensitive. While the common convention is to use them all in uppercase, all the following syntaxes work: ``__METHOD__``, ``__method__``, ``__meTHod__``.

```php
<?php

function foo() {
    // shows foo
    echo __FUNCTION__;
}

function goo() {
    // shows goo
    echo __FUNCTION__;
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.constants.magic.php](https://www.php.net/manual/en/language.constants.magic.php)

## See Also
- [get_class()](https://www.php.net/manual/en/function.get-class.php)
- [Namespaces](https://www.php.net/manual/en/language.namespaces.php)

## Related
- [Magic](/features/magic.md)
- [Magic Property](/features/magic-property.md)
- [Magic Methods](/features/magic-method.md)
- [__CLASS__](/features/__class__.md)
- [__FUNCTION__](/features/__function__.md)
- [__METHOD__](/features/__method__.md)
- [Property Hook](/features/property-hook.md)
- [__get() Method](/features/__get.md)
- [__set() Method](/features/__set.md)
- [Special Constant](/features/special-constant.md)
- [__FILE__](/features/__file__.md)
- [__LINE__](/features/__line__.md)
- [__unset() Method](/features/__unset.md)
- [Constant Case](/features/constant-case.md)
- [Automagic](/features/automagic.md)

