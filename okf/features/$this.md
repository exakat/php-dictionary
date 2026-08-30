---
type: "concept"
title: "$this"
description: "``$this`` is a variable that represents the current object instance."
resource: "https://www.php.net/manual/en/language.oop5.basic.php"
tags: ["oop", "variable", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# $this

``$this`` is a variable that represents the current object instance. Its value is different for each object, and remains the same throughout every non-static method call made on that object.

``$this`` is also called a pseudo-variable. It is never explicitly set, but is available as soon as a non-static method starts. It is also never available, nor can even be created, outside a method.

``$this`` cannot be unset, nor assigned a different value than the current object. This means it cannot be used as the name of a function or method parameter, as a global variable ``global $this;``, or as an explicit lexical variable in a closure ``use ($this)``.

Closures and arrow functions defined inside a non-static method automatically have access to ``$this``, without needing to import it with ``use``. A closure declared with the ``static`` keyword has no access to ``$this``. A named function declared inside a method, on the other hand, is not a closure, and does not have access to ``$this`` either.

``$this`` is not available in ``static`` methods, as they do not require an object to be invoked.

When a non-static method is invoked with the ``::`` syntax from another method of a related class, for example ``parent::method()`` or ``self::method()``, ``$this`` still refers to the calling object.

In a trait, ``$this`` refers to the object of the class that uses the trait, not to the trait itself.

``$this`` may use the array syntax, if the underlying class supports the ``ArrayAccess`` interface.

There is no special variable called ``$that``.

```php
<?php

    class X {
        private $y = 1;
    
        function foo() {
            return $this->y;
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.basic.php](https://www.php.net/manual/en/language.oop5.basic.php)

## See Also
- [PHP $this](https://www.phptutorial.net/php-oop/php-this/)
- [What is $this?](https://medium.com/@erlandmuchasaj/what-is-this-16846fe8c15e)

## Related
- [Class](/features/class.md)
- [Trait](/features/trait.md)
- [Arrow Functions](/features/arrow-function.md)
- [get_class()](/features/get_class.md)
- [Closure](/features/closure.md)
- [Closure Binding](/features/closure-binding.md)
- [Static Method](/features/static-method.md)
- [Scope Resolution Operator ::](/features/scope-resolution-operator.md)
- [Pseudo-variable](/features/pseudo-variable.md)

