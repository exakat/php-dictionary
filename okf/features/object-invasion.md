---
type: "PHP Feature"
title: "Object Invasion"
description: "PHP allows objects of one class to access private structures of an object of the same class."
resource: "https://www.php.net/manual/en/language.oop5.visibility.php#language.oop5.visibility-other-objects"
tags: ["oop", "visiblity", "object", "feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Object Invasion

PHP allows objects of one class to access private structures of an object of the same class.

This is useful when cloning or importing objects with ``__set_state()``: within the same class, those methods can create new objects and assign all their properties.

This feature break OOP encapsulation: even when using private visibility, it is possible to access then from outside the object.

```php
<?php

class A {
    private $p = 0;
    
    // accessing a different object
    function foo(A $a) {
        $a->p = $this->p;
    }

    function __set_state($array) {
        $object = new self();
        $object->p = $array['p'];
        
        return $object;
    }
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.visibility.php#language.oop5.visibility-other-objects](https://www.php.net/manual/en/language.oop5.visibility.php#language.oop5.visibility-other-objects)

## See Also
- [Accessing private properties from other instances](https://verraes.net/2011/03/accessing-private-properties-from-other-instances/)
- [Class Invasion Both Ways](https://php-tips.readthedocs.io/en/latest/tips/class_invasion_reciproque.html)
- [How to easily access private properties and methods in PHP](https://freek.dev/3048-how-to-easily-access-private-properties-and-methods-in-php)

## Related
- [__set_state() Method](/features/__set_state.md)

## Details
- Packagist: [spatie/invade](https://packagist.org/packages/spatie/invade)

