# Method Collision
A method collision happens when a trait is imported in a class, and it holds a method that already exists in the class.

To solve such a collision, the code must use ``insteadof`` and ``use`` keywords, in the ``use`` expression.

There is no collision between the imported trait and the parent of the class, as the trait has priority over the parents. There is also no collision when a trait import another trait: the last method has precedence.
```php
<?php

trait T {
    function foo() { echo __METHOD__; }
}

trait U {
    function foo() { echo __METHOD__; }
}

class C {
    use u, t {
        use t::foo instead of u;
    }
}

new c()->goo();
```

Related : [Trait](Trait), [Insteadof](Insteadof), [Use In Traits](Use In Traits), [Method](Method)
