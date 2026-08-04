# Typed Constant
A typed constant is a class constant that holds an explicit type, like a property or an argument. Global constants cannot be typed.

The type of a constant is usually guessed from its value, as most of the constant have a single value. A typed constant is used by the inheritance system to ensure that redefined constants, in children classes, are compatible with the original type. 

Typed constant may also be useful when the static expression uses conditions or global constants.

Typed constants were introduced in version 8.3. They are optional.
```php
<?php

    class X {
        // expression with a condition
        const string A = B ? 'A' : 'B'; 
        // child class also provide an integer
        const int C = 3; 
        // D is defined with a global constant: Now, E also must be an integer
        const int D = E; 
    }
    
    class Y extends X {
        const int C = 13; 
    }

?>
```

## See Also

+ [PHP 8.3: Typed Class Constants](https://php.watch/versions/8.3/typed-constants)

Related : [Static Constant](Static Constant)
