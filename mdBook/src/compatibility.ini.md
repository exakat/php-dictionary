# Compatibility
Compatibility refers to the ability of two or more things to work together without conflicts or issues. 

Compatibility may refer to:

+ Version compatibility, when code works in both versions
+ System compatibility, when code works on different operating systems
+ Method compatibility, when methods are compatible in the parent and the child class.
```php
<?php

    class X {
        function foo(int $i) {}
    }
    
    class Y extends X {
        // The type must be compatible with the one of the parent
        // The name does not have to be the same as in the parent
        function foo(int|null $b) {}
    }

?>
```

Related : [Method Compatibility](Method Compatibility), [Interoperability](Interoperability), [Migration](Migration)
