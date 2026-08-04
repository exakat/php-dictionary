# Override Attribute
This is a native PHP attribute, which tells the engine that a method must be overriding the same method in a parent.

The overridden method may be in the parent, or any subsequent parent; it may also be defined in a trait, as a concrete definition or an alias.

The error is only reported at execution time. The same error message is used if the class has no parent, at linting time.

This attribute may be added to any method.
```php
<?php

class MyParentClass {
    function foo() {}
}

class MyChildClass {
    #[Override]
    function foo() {}

    #[Override]
    function goo() {}
    // This raise an error, as goo() has no definition in the parent.
}

?>
```

## See Also

+ [Understanding PHP #[Override] Attribute: A Beginner's Complete Guide — 2025](https://medium.com/@arifhossen.dev/understanding-php-override-attribute-a-beginners-complete-guide-55275bf7fc87)

Related : [Overriding](Overriding), [Overwrite](Overwrite), [PHP Native Attributes](PHP Native Attributes), [PHP Native Attribute](PHP Native Attribute), [Attribute Class](Attribute Class), [Method Resolution Order (MRO)](Method Resolution Order (MRO))
