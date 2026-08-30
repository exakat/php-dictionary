---
type: "PHP Feature"
title: "Object Operator ->"
description: "The Object Operator is the operator to access properties and methods from an object."
resource: "https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.properties-methods"
tags: ["feature", "operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Object Operator ->

The Object Operator is the operator to access properties and methods from an object. It is ``->``, sometimes called the arrow. 

Depending on the context, those properties and methods must be public, protected or private. When the visibility is not valid, or if the method doesn't exists, PHP yields a Fatal error. Accessing an undefined property is a warning. 

Object Nullsafe Operator is directly related to the Object operator: the difference is that the former keeps on executing when the support object is null, while the second stops with a fatal error.

```php
<?php

class A {
    public $property = 1;
    
    function foo() {
        return __CLASS__;
    }
}

$a = new a();

// displays 1
echo $a->property; 

// displays \A
echo $a->foo(); 

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.properties-methods](https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.properties-methods)

## See Also
- [What Is -> In PHP?](https://www.codingdeeply.com/what-is-in-php/)
- [Arrow Functions](https://www.php.net/manual/en/functions.arrow.php)

## Related
- [Null Safe Object Operator](/features/nullsafe-object-operator.md)
- [Scope Resolution Operator ::](/features/scope-resolution-operator.md)
- [Double Arrow](/features/double-arrow.md)
- [Nullsafe](/features/nullsafe.md)
- [Object Nullsafe Operator ?->](/features/object-nullsafe-operator.md)

