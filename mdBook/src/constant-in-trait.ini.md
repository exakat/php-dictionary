# Constants In Trait
Constants were added to trait in version 8.3. Before that, they were not allowed. 

After PHP 8.3, they are added to the host class, with less precedence than the host own constants, but higher precedence than the host parent's constants.

It is not possible to call a trait constant directly via its trait's name: this has to be done via the host class.
```php
<?php

    trait T {
        private const A = 1;
    }
    
    class X {
        use T;
    }
    
    echo A::T;

?>
```

Related : [Trait](Trait), [Static Constant](Static Constant)
