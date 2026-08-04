# Class
Basic class definitions begin with the keyword class, followed by a class name, followed by a pair of curly braces which enclose the definitions of the properties and methods belonging to the class.

A class name may be validated with the following regex: ``^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$``; and by avoiding a list of PHP keywords, such as ``namespace``, ``class``, ``interface``, etc.
```php
<?php

class X {
    const CONSTANT = 1;
    
    private $property = 2;
    
    function method() {
        /// and more
    }

}

?>
```

## See Also

+ [How to use PHP classes for object-oriented pro­gram­ming](https://www.ionos.com/digitalguide/websites/web-development/php-classes/)

Related : [Readonly](Readonly), [Class Invasion](Class Invasion), [Const](Const), [Class Getter Method](Class Getter Method), [implements](implements), [Inheritance](Inheritance), [Method](Method), [Class Setter Method](Class Setter Method), [Trait](Trait), [Class Wither Method](Class Wither Method), [Structure](Structure), [Class Interface Trait Enumeration (CITE)](Class Interface Trait Enumeration (CITE)), [$this]($this), [Lazy Objects](Lazy Objects), [Polymorphism](Polymorphism), [Promoted Properties](Promoted Properties), [Existence](Existence), [Phptoken](Phptoken), [Reflection](Reflection), [Undefined](Undefined), [Base Class](Base Class), [instance](instance), [is_a()](is_a()), [Naming Conflict](Naming Conflict), [Non-static](Non-static)
