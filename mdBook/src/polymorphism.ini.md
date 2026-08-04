# Polymorphism
Polymorphism is a fundamental concept in object-oriented programming, or OOP. It allows different classes to be treated as instances of a common base class, interface, or abstract class, and it allow to write code that works with these objects without needing to know their specific types. 

Polymorphism is achieved through method overriding and interfaces. It is possible to inherit from several parent classes, as long as they inherit from each other. On the other hand, implementing interfaces can be arbitrary chosen for any class and their children.
```php
<?php

    class Object {}
    
    // the interfaces are empty for better readability
    interface hasMedian {}
    
    interface hasInscribedCircle {}
    
    class Triangle extends Object implements hasInscribedCircle, hasMedian {}
    
    class Square extends Object implements hasInscribedCircle {}
    
    class Pentagon extends Object {}

?>
```

## See Also

+ [PHP Polymorphism Explained ( By Examples )](https://www.scaler.com/topics/php-tutorial/polymorphism-in-php/)
+ [Polymorphism in PHP With Example](https://mohasin-dev.medium.com/polymorphism-in-php-with-example-83de1792c89d)

Related : [Interface](Interface), [Class](Class), [Inheritance](Inheritance), [Trait](Trait), [Generics](Generics), [instanceof](instanceof), [Intersection Type](Intersection Type), [is_a()](is_a()), [OOP (Object Oriented Programming)](OOP (Object Oriented Programming)), [Monomorphization](Monomorphization), [Existential Type](Existential Type), [Higher-Kinded Type](Higher-Kinded Type), [Mixin](Mixin), [Row Polymorphism](Row Polymorphism), [Sealed Class](Sealed Class), [Multiple Dispatch](Multiple Dispatch), [Pattern](Pattern), [Structural Typing](Structural Typing), [Type Class](Type Class)
