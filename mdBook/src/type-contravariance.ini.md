# Contravariance
Contravariance allows a parameter type to be less specific in a child method, than that of its parent. 

This means that a parameter ``$param`` in the method ``foo`` of the child class ``X`` can be a parent of the type in the method ``foo`` of the parent class. 

Less specific types can be: the same type ``W``, a parent class of the ``W`` type, here ``V``, an interface implemented by the type ``W``, a union type, such as ``W|string``. In particular, the type may become nullable. 

It cannot be a totally different type, an intersectional type, such as ``W&A``, a different class that implements the same interface than ``W``, or a different scalar type. 
```php
<?php

class V {}

class W extends V {
    // This method accepts an object compatible with w, but less specific
    function foo(W $param) { }
}

class X extends W {
    function foo(V $param) { }
}

?>
```

## See Also

+ [Covariance and Contravariance in PHP](https://dev.to/ashallendesign/covariance-and-contravariance-in-php-3cim)

Related : [Covariance](Covariance), [Nullable](Nullable), [Intersection Type](Intersection Type), [Union Type](Union Type), [Scalar Types](Scalar Types), [Type Invariant](Type Invariant), [Liskov Substitution Principle (LSP)](Liskov Substitution Principle (LSP))
