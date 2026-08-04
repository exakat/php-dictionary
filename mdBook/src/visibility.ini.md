# Visibility
Properties, methods and classes may have a visibility. It limits the scope of the definition:

+ ``private``: to the current class
+ ``protected``: to the current class hierarchy, parents and children classes
+ ``public``: to all the code
+ ``var``: to all the code, deprecated

The default visibility is ``public``. The visibility may be omitted when using another option, such as ``final``, ``static``. It is recommended to always specify the visibility explicitly.

Visibility may no change, unless when overwriting it with a trait, or in a child class.

Visibility may be by-passed with class-invasion, where an object of one class may access another object's property, as long as they are from the same class or family.
```php
<?php

    class X {
        public const X = 1;
        
        private $property;
        
        protected function foo() {}
    }

?>
```

## See Also

+ [Understanding The Concept Of Visibility In Object Oriented PHP](https://torquemag.io/2016/05/understanding-concept-visibility-object-oriented-php/)
+ [PHP Tricks: Access control bypass](https://peakd.com/hive-168588/@crell/php-tricks-access-control-bypass)

Related : [Properties](Properties), [Method](Method), [Static Constant](Static Constant), [Class Constants Visibility](Class Constants Visibility), [Class Invasion](Class Invasion), [Object](Object), [Private Visibility](Private Visibility), [Protected Visibility](Protected Visibility), [Public Visibility](Public Visibility), [Var](Var), [Asymmetric Visibility](Asymmetric Visibility), [Constructor](Constructor), [Readable](Readable), [Writable](Writable), [get_object_vars()](get_object_vars()), [Class Getter Method](Class Getter Method), [Variable Scope](Variable Scope), [Writeable](Writeable), [Permission](Permission), [__callStatic() Method](__callStatic() Method), [Data Hiding](Data Hiding), [Modifier](Modifier), [Module System with Explicit Exports](Module System with Explicit Exports), [Package-Level](Package-Level)
