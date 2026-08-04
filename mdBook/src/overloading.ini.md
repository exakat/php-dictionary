# Overloading
Overloading provides means to dynamically create properties and methods. These dynamic entities are processed via magic methods one can establish in a class for various action types. 

Property overloading is based on the magic methods ``__get``, ``__set``, ``__isset``, ``__unset``. Method overloading is based on the magic methods ``__call``, ``__callStatic``. There is no way to check if a overloaded method exist or not, unlike with properties.

Overloading does not apply to class constants.

Operator overloading is not supported. For example, it is not possible to define a ``-`` minus operator between two objects. This still exists for ``+``, which applies to integers, floats and arrays. It may also be supported by specific PHP extensions.
```php
<?php

class X {
    function foo() {
        echo __METHOD__;
    }
    
    function __call($name, $args) {
        echo self::class. '::'. $name;
    }
}

$x = new X;
$x->foo(); // x::foo
$x->goo(); // x::goo

// existence check
var_dump(method_exists(x::class, 'foo'));    // true
var_dump(method_exists(x::class, 'goo'));    // false
var_dump(method_exists(x::class, '__call')); // true

?>
```

Related : [Magic Methods](Magic Methods), [Dynamic Method](Dynamic Method), [Method Resolution Order (MRO)](Method Resolution Order (MRO))
