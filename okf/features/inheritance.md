---
type: "PHP Feature"
title: "Inheritance"
description: "Inheritance is a mechanism where a class is build from another class, and form a hierarchy of classes that share a set of attributes and methods."
resource: "https://www.php.net/manual/en/language.oop5.inheritance.php"
tags: ["class"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Inheritance

Inheritance is a mechanism where a class is build from another class, and form a hierarchy of classes that share a set of attributes and methods.

```php
<?php

class x {
    public function foo() {
        echo "I am foo!\n";
    }
}

class y extends x {
    public function boo() {
        echo "I am boo!\n";
    }
}

$y = new Y();
$y->boo(); // calling the boo method, defined only with y
$y->foo(); // calling the foo method, defined in x, and inherited in y

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.inheritance.php](https://www.php.net/manual/en/language.oop5.inheritance.php)

## See Also
- [This is why PHP don't have multiple inheritance](https://www.amitmerchant.com/this-is-why-php-dont-have-multiple-inheritance/)

## Related
- [Class](/features/class.md)
- [Class Hierarchy](/features/class-hierarchy.md)
- [Composition](/features/composition.md)
- [Constructor](/features/constructor.md)
- [Operator Overloading](/features/operator-overloading.md)
- [Overwrite](/features/overwrite.md)
- [Base Class](/features/base-class.md)
- [Base](/features/base.md)
- [Method Resolution Order (MRO)](/features/mro.md)
- [Polymorphism](/features/polymorphism.md)

