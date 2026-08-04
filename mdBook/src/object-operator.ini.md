# Object Operator ->
The Object Operator is the operator to access properties and methods from an object. It is ``->``, sometimes called the arrow. 

Depending on the context, those properties and methods must be public, protected or private. When the visibility is not valid, or if the method doesn't exists, PHP yields a Fatal error. Accessing an undefined property is a warning. 

Object Nullsafe Operator is directly related to the Object operator: the difference is that the former keeps on executing when the support object is null, while the second stops with a fatal error.
```php
<?php

class A {
    public $property = 1;
    
    function foo() {
        return __CLASS__;
    }
}

$a = new a();

// displays 1
echo $a->property; 

// displays \A
echo $a->foo(); 

?>
```

Related : [Null Safe Object Operator](Null Safe Object Operator), [Scope Resolution Operator ::](Scope Resolution Operator ::), [Double Arrow](Double Arrow), [Nullsafe](Nullsafe), [Object Nullsafe Operator ?->](Object Nullsafe Operator ?->)
