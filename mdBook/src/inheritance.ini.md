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

## See Also

+ [This is why PHP don't have multiple inheritance](https://www.amitmerchant.com/this-is-why-php-dont-have-multiple-inheritance/)

Related : [Class](Class), [Class Hierarchy](Class Hierarchy), [Composition](Composition), [Constructor](Constructor), [Operator Overloading](Operator Overloading), [Overwrite](Overwrite), [Base Class](Base Class), [Base](Base), [Method Resolution Order (MRO)](Method Resolution Order (MRO)), [Polymorphism](Polymorphism)
