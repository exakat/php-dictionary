# Public Visibility
The ``public`` keyword is part of the three keywords to define visibility of a method, property or constant. It is the lowest level of visibility: it doesn't restrict usage.

``public`` is also the default visibility when it is omitted.
```php
<?php

    class X {
        // public constant
        const X = 1;
        public $p = 2;
    }
    
    $x = new x;
    echo $x->p;
    echo x::X;

?>
```

Related : [Final Keyword](Final Keyword), [Visibility](Visibility), [Private Visibility](Private Visibility), [Protected Visibility](Protected Visibility), [Var](Var)
