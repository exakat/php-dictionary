---
type: "PHP Feature"
title: "Class Operator"
description: "Class operator is the ``::class``, added to a class, interface, trait or enumeration identifier."
resource: "https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.class.class"
tags: ["operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Class Operator

Class operator is the ``::class``, added to a class, interface, trait or enumeration identifier. It returns the fully qualified name of the class, according to the current code. 

``::class`` is affected by ``use`` expressions, but not by ``class_alias()`` function.

```php
<?php

// class operator in action
// This is an unknown class, so it displays A\B
echo A\B::class;

// This is an 'use' class, so it displays A\B
use A\B as D;
echo D::class;

// class_alias creates a new class, so it is different. 
class E{}
class_alias('E', 'F');
echo F::class;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.class.class](https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.class.class)

## See Also
- [PHP: ::class keyword](https://www.php.net/manual/en/language.oop5.constants.php#language.oop5.constants.class)
- [PHP RFC: Class Name Resolution As Scalar Via class Keyword](https://wiki.php.net/rfc/class_name_scalars)

## Related
- [Use](/features/use.md)

