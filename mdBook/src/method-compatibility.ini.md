# Method Compatibility
Method compatibility means that when a class overrides a method, from a parent class or interface, the new method must keep a compatible signature.

In short, the child method must:

+ Have the same or wider visibility, e.g. public stays public, private becomes protected
+ Accept the same parameter types, or more general ones
+ Return the same type, or a more specific one
+ Not require more mandatory parameters

If it's incompatible, PHP throws a fatal error.
```php
<?php

class X {
    function foo(int $a): void {}
    function goo(int $a): X {}
    function hoo(int $a): string {}
}

class Y extends X {
    // This is compatible, as it is identical to the parent method
    function foo(int $a): void {}
    
    // This is compatible, yet not identical
    // the parameter is more general
    // the return type is more precise
    function goo(int|string $a): Y {}
    
    // This is not compatible with the parent's method signature
    function hoo(int $a): int {}
}

?>
```

Related : [Method](Method), [throw](throw), [Fatal Error](Fatal Error), [Compatibility](Compatibility)
