# Static Call
A static call is a call to a structure, where the name of the structure is hardcoded.

A static method may be called with a static call, or with a dynamic call. Both are valid.
```php
<?php

    class X {
        static function foo() {}
    }
    
    new X(); // static call
    
    $class = X::class;
    new $class(); // dynamic call
    
    X::foo(); // static call of a static method
    $class::foo(); // dynamic call of a static method

?>
```

Related : [new](new), [Dynamic Call](Dynamic Call), [Dynamic Class](Dynamic Class)
