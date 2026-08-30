---
type: "magic method"
title: "__isset() Method"
description: "``__isset()`` is a magic method: it is called when the existence of a property has to be checked."
resource: "https://www.php.net/manual/en/language.oop5.overloading.php#object.isset"
tags: ["magic method"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# __isset() Method

``__isset()`` is a magic method: it is called when the existence of a property has to be checked.

That way, it is possible to create dynamically properties, without hardcoding them. 

The ``__isset()`` method is usually paired with the ``__get()`` and ``__set()`` methods.

The ``__isset()`` is called by ``isset()`` and ``empty()``. They are also called by the coalesce operator ``??`` and ``??=``. It is not called on null-safe object operator ``?->``.

```php
<?php

    class X {
        private $values = ['a' => 1,
                           'b' => 2,
                           ];
    
        function __isset($name) {
            return isset($this->values[$name]);
        }
    }
    
    $x = new X;
    var_dump(isset($x->a)); // true 
    var_dump(empty($x->c)); // false 

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.overloading.php#object.isset](https://www.php.net/manual/en/language.oop5.overloading.php#object.isset)

## See Also
- [A Look At PHP’s isset()](https://medium.com/@liamhammett/a-look-at-phps-isset-df64df7158ab)
- [__get(), __set(), __isset() and __unset()](https://riptutorial.com/php/example/3635/--get------set------isset---and---unset--)

## Related
- [Magic Methods](/features/magic-method.md)
- [__set() Method](/features/__set.md)
- [__get() Method](/features/__get.md)
- [__unset() Method](/features/__unset.md)
- [Isset](/features/isset.md)
- [Null](/features/null.md)
- [Null Safe Object Operator](/features/nullsafe-object-operator.md)
- [Magic Property](/features/magic-property.md)

