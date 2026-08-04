# Method Resolution Order (MRO)
Method Resolution Order, or MRO, is the algorithm that determines the order in which base classes are searched when looking up a method or property in an inheritance hierarchy.

PHP MRO applies to class hierarchies, via ``extends`` and trait composition, via ``use``. When a method is called, PHP follows a specific resolution order to find the implementation: the class itself first, then traits, then parent classes, recursively.

For traits, since there may be several of them, PHP uses a priority system: methods defined in the using class override trait methods, and traits listed first take precedence over those listed later. Conflicts between traits must be resolved explicitly using ``insteadof`` and ``as`` operators.

This becomes critical in deep inheritance chains or with multiple traits, where the resolution order may not be immediately obvious and can lead to unexpected behavior if not managed carefully.
```php
<?php

    trait A {
        function hello() { return 'A'; }
    }
    
    trait B {
        function hello() { return 'B'; }
    }
    
    class C {
        use A, B {
            A::hello insteadof B; // MRO: A wins over B
            B::hello as helloB;
        }
    }
    
    $c = new C();
    echo $c->hello();  // A
    echo $c->helloB(); // B

?>
```

Related : [Trait](Trait), [Inheritance](Inheritance), [parent](parent), [Child Class](Child Class), [Overloading](Overloading), [Override Attribute](Override Attribute), [Late Static Binding](Late Static Binding), [Abstract Class](Abstract Class)
