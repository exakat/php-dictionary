# constant()
The ``constant()`` function is a native function, which provide the value of a declared global constant, a class constant or an enumeration case.

For class constant and enumeration cases, it may be replaced with the dynamic class constant syntax, introduced in version 8.3.
```php
<?php

    const A = 1;
    
    echo constant('A');
    
    enum E: string {
        case B = 'abc';
        const C = 'def';
    }
    
    echo constant('E::B')->value; // abc
    echo constant('E::C');        // def

?>
```

Related : [Dynamic Class Constant](Dynamic Class Constant), [Class Constant Syntax](Class Constant Syntax), [Dynamic Constant](Dynamic Constant)
