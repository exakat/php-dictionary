---
type: "PHP Feature"
title: "Constant Case"
description: "Constant case, also written ``CONSTANT_CASE``, is a way of writing constant names, without spaces, where: + All the letters are set to upper case + Each word is separated from the other by an underscore Constant case is used for constants, both global and class."
resource: "https://stringcase.org/cases/snake/"
tags: ["convention"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Constant Case

Constant case, also written ``CONSTANT_CASE``, is a way of writing constant names, without spaces, where:

+ All the letters are set to upper case
+ Each word is separated from the other by an underscore

Constant case is used for constants, both global and class. It is not used for magic constants, which are case insensitive.

```php
<?php

const CONSTANT_CASE = 1;

class X {
    const CLASS_CONSTANT_CASE = 1;
    
    function foo() {
        echo __METHOD__;
        echo __method__; // same as above
    }
}

?>
```

## Documentation
- [https://stringcase.org/cases/snake/](https://stringcase.org/cases/snake/)

## See Also
- [stringcase website](https://stringcase.org/)

## Related
- [Pascal Case](/features/pascal-case.md)
- [Camel Case](/features/camel-case.md)
- [Snake Case](/features/snake-case.md)
- [Magic Constants](/features/magic-constant.md)
- [Static Constant](/features/class-constant.md)
- [Constants](/features/constant.md)
- [Underscore](/features/underscore.md)

