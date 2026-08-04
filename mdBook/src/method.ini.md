# Method
Methods are functions, dedicated to a class. They are defined inside the body of a class, and may only be accessed in relation to that class: via an object, the class name or another method.

Methods are defined in traits, and then imported in a class for usage.

Methods are also called member functions. Indeed, they are functions, but they belong to an object, just like a member, or property. This is less used.
```php
<?php

    class X {
        public function foo() {
            echo "I am foo!\n";
        }
    }
    
    $x = new Y();
    $y->foo(); // calling the foo method, defined in x,

?>
```

## See Also

+ [PHP 8 – Functions and Methods](https://www.infoq.com/articles/php8-functions-methods/)

Related : [Class](Class), [__call() Method](__call() Method), [Default Parameter](Default Parameter), [Fossilized Methods](Fossilized Methods), [Functions](Functions), [Properties](Properties), [Return](Return), [Static Method](Static Method), [Visibility](Visibility), [Call Graph](Call Graph), [Callbacks](Callbacks), [Impure Function](Impure Function), [Method Compatibility](Method Compatibility), [Pure Function](Pure Function), [Trait](Trait), [Method Collision](Method Collision), [Non-static](Non-static), [Relay Function](Relay Function)
