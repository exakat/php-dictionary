# Use
The use operator has three distinct usages. 

The use operator allows the import and aliasing of fully qualified names, such as classes, interfaces, constants, etc. in the current namespace. 

When ``use`` used inside a class or a trait, it imports a trait and its methods and properties. It is also the place to solve naming conflicts.

When ``use`` is used with a closure, it imports the listed variables in the closure, from the defining environment.
```php
<?php

namespace My\Space {
    // class importation with use
    use \Some\Other\Space\aClass as A;
    
    class B {
        // trait importation of use
        use MyTrait; 
    
        function foo() {
            $a = 1;
            // use imports the variable $a in the closure. Its value is accessible at execution time.
            $closure = function ($b) use ($a) { return $a + $b;};
        }
    }

    // class importation with use
    use \Some\Other\Space\aClass as A2;
}

?>
```

Related : [Fully Qualified Name](Fully Qualified Name), [Use Alias](Use Alias), [Closure](Closure), [Trait](Trait), [Use In Traits](Use In Traits), [Fully Qualified Name](Fully Qualified Name), [Class Aliases](Class Aliases), [Class Operator](Class Operator), [class_alias()](class_alias()), [Insteadof](Insteadof)
