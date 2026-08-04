# Multiple Dispatch
Multiple dispatch, as found in Common Lisp, Julia, and Dylan, selects which implementation of a function to run based on the runtime types of all of its arguments, not just the first one, the way ordinary object-oriented method calls do. A function defined for ``(Circle, Rectangle)`` and again for ``(Circle, Circle)`` will resolve to a different body depending on the runtime type of every argument passed, and this resolution happens at the call site, at runtime.

This differs from single dispatch, where a method call ``$shape->collidesWith($other)`` only considers the runtime type of ``$shape``; the type of ``$other`` is fixed by its declared parameter type and requires manual branching, such as ``instanceof`` checks or the double-dispatch visitor pattern, to react differently per combination.

PHP performs single dispatch only: overloaded function declarations do not exist, and ``function collidesWith(Circle $a, Rectangle $b)`` cannot coexist with ``function collidesWith(Circle $a, Circle $b)`` as two resolvable overloads. Choosing behavior based on the combined runtime types of several arguments must be written by hand with ``match``, ``instanceof``, or the visitor pattern.
```php
<?php
    
    // PHP has no true overloading: this second declaration is a fatal error.
    function collide(Circle $a, Circle $b) { /* ... */ }
    function collide(Circle $a, Rectangle $b) { /* ... */ } // Fatal error: redeclaration

?>
```

Related : [Overloading](Overloading), [Method Overloading](Method Overloading), [Polymorphism](Polymorphism), [instanceof](instanceof)
