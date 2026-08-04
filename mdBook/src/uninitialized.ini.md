# Uninitialized
A data container, such as variable, property, array index is uninitialized, when it is used for reading, while no value was provided so far. 

Different behaviors happen, depending on the type of data container.

+ Variable: a warning is emitted, and the variable's content is actually ``null``. The variable stays undefined
+ Static Property: a Fatal error is emitted
+ Undefined Normal Property: a warning is emitted. The property's content is actually ``null``
+ Untyped Normal Property without default value: the property's content is actually ``null``. No warning nor error
+ Typed Normal Property without default value: a fatal error is emitted
+ Property with default value: the default value is used.


```php
<?php

    echo $a; //  Undefined variable $a
    
    class A {
        public int $b;
    }
    
    echo A::$a; // Access to undeclared static property A::$a
    new A()->a; // 
    new A()->b; // Typed property A::$b must not be accessed before initialization

?>
```

## See Also

+ [Basics](https://www.php.net/manual/en/language.variables.basics.php)

Related : [Initialisation](Initialisation), [Existence](Existence), [Property Type Declaration](Property Type Declaration)
