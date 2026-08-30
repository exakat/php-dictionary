---
type: "PHP Feature"
title: "Constants"
description: "Constants are named values, that never change."
resource: "https://www.php.net/manual/en/language.constants.php"
tags: ["syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Constants

Constants are named values, that never change. 

Constants may be created with the const keyword or the ``define()`` function. They may be tested for existence with the ``defined()`` function.

There are global constants, which are accessible with their name and their namespaces. There are also constants in classes, interfaces, enums and traits. Those are called class constant.

Constants are namespace dependent. They can be imported using the ``use const`` command. 

Constants are usually written in uppercase. 

Global constants used to be case insensitive, when created with ``define()``. This feature was removed in version 8.0. Nowadays, both ``const`` and ``define`` create case insensitive values.

```php
<?php

const A = 1;
define('B', 2);

// displays 1
echo A;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.constants.php](https://www.php.net/manual/en/language.constants.php)

## See Also
- [Understanding PHP Constants: A Simple Guide with Examples](https://flatcoding.com/tutorials/php/understanding-the-php-constant-expression/)
- [Constants](https://phplang.org/spec/06-constants.html)

## Related
- [Static Constant](/features/class-constant.md)
- [Centralization](/features/centralization.md)
- [Constant Scalar Expression](/features/constant-scalar-expression.md)
- [Dynamic Constant](/features/dynamic-constant.md)
- [New In Initializers](/features/new-in-initializer.md)
- [Predefined Constants](/features/predefined-constant.md)
- [Class Constant Syntax](/features/class-constant-syntax.md)
- [Constant Case](/features/constant-case.md)
- [define()](/features/define.md)
- [Literal](/features/literal.md)
- [Anonymous Constant](/features/anonymous-constant.md)
- [DIRECTORY_SEPARATOR](/features/directory_separator.md)
- [Dynamic Class Constant](/features/dynamic-class-constant.md)
- [Hard Coded](/features/hard-coded.md)
- [Magic Numbers](/features/magic-number.md)
- [Order Of Execution](/features/order-of-execution.md)

