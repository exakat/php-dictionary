# Union Type
Union types refer to the ability to specify multiple possible types for a property, parameter, or return value. It allows a property or parameter to accept values of different types. It allows a method or function to return values of different types. Union types were introduced in version 8.0.

Before PHP 8, type declaration could only have a single type declaration, except for the null type. Nowadays, with union types, the code can declare multiple types by separating them with a pipe ``|`` symbol. 

Union types were introduced for exception catching, before PHP 8.
```php
<?php

    class X {
        private A | B | C $property;
    }
    
    try {
    
    } catch (A|B|C $e) {
    
    }

?>
```

## See Also

+ [What are union types and how do you use them in PHP?](https://www.educative.io/answers/what-are-union-types-and-how-do-you-use-them-in-php)

Related : [Type System](Type System), [Composite Type](Composite Type), [Alias Types](Alias Types), [Disjunctive Normal Form (DNF)](Disjunctive Normal Form (DNF)), [Literal Types](Literal Types), [Relative Types](Relative Types), [Property Type Declaration](Property Type Declaration), [Intersection Type](Intersection Type), [Named Type](Named Type), [Type Inference](Type Inference), [Algebraic Data Type](Algebraic Data Type), [Duplicate](Duplicate), [Sum Type](Sum Type), [Type System](Type System)
