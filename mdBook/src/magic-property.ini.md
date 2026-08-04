# Magic Property
Special properties, which are not declared, but dynamically handled by the magic methods. They do not have specific declaration. 

The magic methods to handle magic properties are: ``__get()``, ``__set()``, ``__isset()`` and ``__unset()``.
```php
<?php

class X {
    function __get($name) {
        return 'World!';
    }
}

$x = new X;
echo $x->hello; // display World!

?>
```

Related : [__get() Method](__get() Method), [__set() Method](__set() Method), [__isset() Method](__isset() Method), [__unset() Method](__unset() Method), [Magic Constants](Magic Constants), [Magic](Magic), [Properties](Properties)
