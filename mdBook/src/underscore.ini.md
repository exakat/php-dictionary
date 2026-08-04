# Underscore
Underscore is the ``_`` character. 

The underscore is used in integers to make them readable when the number of digit grows. 

It is also used in double, to identify PHP magic methods, such as ``__get``, ``__set``, ``__call``, etc. 

It was also used in earlier PHP versions to identify protected methods and properties: the name of the method was prefixed with ``_``. This practice is rare nowadays, and is enforced with visibility. 

Underscore used to be added to class and method names, to keep them unique. This is now a task for namespaces.

It is used as prefix with PHP superglobal variables, such as ``$_GET``, ``$_POST``. 

Underscore is also used as the numeric separators in integers and floats: it adds some breathing room in the string of digits, and makes it more readable, without changing the value.

Underscore is a valid name for a variable, a function, a constant, a method, a property. It is not valid anymore for classes and similar, since PHP 8.4. It is now reserved for future features. There is also a PHP native function called ``_()``, which belongs to the ``gettext`` extension.
```php
<?php

$million = 1_000_000;

class _ {
    const _ = '_';
    
    function _() {
        _::$_ = _::_; 
    }
    
    private static $_ = 1;

}

?>
```

Related : [False](False), [Comparison](Comparison), [DivisionByZeroError](DivisionByZeroError), [Constant Case](Constant Case), [Numeric Separator](Numeric Separator), [Snake Case](Snake Case)
