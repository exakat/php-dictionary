# Structural Typing
Structural typing is a type-compatibility rule under which a value satisfies a type purely because it exposes the required shape: the same methods and properties, with compatible signatures, regardless of its declared name or inheritance chain. It contrasts with nominal typing, where compatibility is decided by an explicit declaration, such as ``implements`` or ``extends``.

Languages such as TypeScript, Go, and OCaml use structural typing: any object or struct that happens to define the required methods satisfies an interface, whether or not it was ever declared to implement it.

PHP's type system is nominal: a class only satisfies an interface if it explicitly declares ``implements InterfaceName``, even when it already defines every required method with a compatible signature. PHP performs no structural compatibility check between classes. The closest PHP comes to structural typing is duck typing at runtime, where code calls a method on any object without checking its declared type, and lets a fatal error occur if the method turns out to be missing.
```php
<?php

    interface Greeter {
        public function greet(): string;
    }
    
    class Person {
        // Same shape as Greeter, but does not implement it.
        public function greet(): string {
            return 'Hello';
        }
    }
    
    function sayHello(Greeter $g) {
        echo $g->greet();
    }
    
    sayHello(new Person()); // Fatal error: Person does not implement Greeter

?>
```

Related : [Interface](Interface), [Type System](Type System), [Type Checking](Type Checking), [Polymorphism](Polymorphism)
