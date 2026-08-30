---
type: "PHP Feature"
title: "Uninitialized"
description: "A data container, such as a variable, a property, or an array index, is uninitialized, when it is used for reading, while no value was provided so far."
resource: "https://en.wikipedia.org/wiki/Uninitialized_variable"
tags: ["data-container"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Uninitialized

A data container, such as a variable, a property, or an array index, is uninitialized, when it is used for reading, while no value was provided so far.

Different behaviors happen, depending on the type of data container.

+ Variable: a warning is emitted, and the variable's content is actually ``null``. The variable stays undefined
+ Static Property: a Fatal error is emitted
+ Undefined Normal Property: a warning is emitted. The property's content is actually ``null``
+ Untyped Normal Property without default value: the property's content is actually ``null``. No warning nor error
+ Typed Normal Property without default value: a fatal error is emitted
+ Property with default value: the default value is used.

```php
<?php

    echo $a; //  Undefined variable $a
    
    class A {
        public int $b;
    }
    
    echo A::$a; // Access to undeclared static property A::$a
    new A()->a; // 
    new A()->b; // Typed property A::$b must not be accessed before initialization

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Uninitialized_variable](https://en.wikipedia.org/wiki/Uninitialized_variable)

## See Also
- [Basics](https://www.php.net/manual/en/language.variables.basics.php)

## Related
- [Initialisation](/features/initialisation.md)
- [Existence](/features/existence.md)
- [Property Type Declaration](/features/type-declaration-property.md)

