# Use In Traits
``use`` is a keyword for traits and classes: it imports another trait in the current structure. 

The import federates all the defined structures in both traits and classes: the methods, the properties and the constants. 

There may be naming conflicts between the imported traits and the host structure: the conflicts may be between an import and the host structure, or between two distinct imported traits.

In that case, there is a mechanism to resolve the conflicts: the ``insteadof`` keyword allows the host to choose between several competing implementation. 

The ``as`` keyword is also available to create aliases from the import structures. These aliases shall not introduce new naming conflicts.
```php
<?php

trait T {
    function foo() {}
}

trait T2 {
    use T {
        T::foo as goo; // aliasing
        T::foo insteadof foo; // aliasing
        T2::foo as hoo; // aliasing
    }
    
    function foo() {}
}

?>
```

Related : [Use](Use), [Trait](Trait), [Collision](Collision), [Method Collision](Method Collision)
