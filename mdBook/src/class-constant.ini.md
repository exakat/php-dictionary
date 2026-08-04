# Static Constant
Static constants are constants that are defined inside a class, interface, trait since PHP 8.2 and enumeration. 

Static constants have a visibility. Visibility may be ``public``, ``protected``, ``private``. By default, and for backward compatibility, a constant without a visibility is ``public``.

Static constants may also be overwritten by children classes. They can also use the ``final`` keyword, to avoid such behavior.

Static constants are defined at coding time, and cannot be changed later, not dynamically created. 

Static constant syntax is the same than for enumeration cases.
```php
<?php

    class X {
        public  const FOO = 1;
        private const BAR = 2;
        private const string TYPE = 'valid';
    }

?>
```

## See Also

+ [Everything You Should Know About PHP Const in Class](https://pangea.ai/resources/everything-you-should-know-about-php-const-in-class)
+ [Class Constants](https://www.codewithharry.com/tutorial/php-class-constants)
+ [PHP 8.3 Typed Constants in Production](https://dev.to/ahmet_gedik778845/php-83-typed-constants-in-production-2cpa)

Related : [Visibility](Visibility), [Final Keyword](Final Keyword), [Constants In Trait](Constants In Trait), [Constants](Constants), [Dynamic Constant](Dynamic Constant), [Special Constant](Special Constant), [Class Constant Syntax](Class Constant Syntax), [define()](define()), [Literal](Literal), [New In Initializers](New In Initializers), [Anonymous Constant](Anonymous Constant), [Constant Case](Constant Case), [Dynamic Class Constant](Dynamic Class Constant), [Typed Constant](Typed Constant), [Name Conventions](Name Conventions)
