# Duck Typing
In duck typing, an object is of a given type if it has all methods and properties required by that type. 

It is described by this sentence: 'If it walks like a duck and it quacks like a duck, then it must be a duck'.

This may apply to a class that offers a set of methods, that are listed in an interface, but the class doesn't implement explicitly that interface.
```php
<?php

    interface I {
        function foo() ; 
    }
    
    // class X doesn't implement i, yet it is of type i because it implements foo()
    class X {
        function foo() {}
        function bar() {}
    }

?>
```

## See Also

+ [Duck Typing in PHP](https://matthiasnoback.nl/2017/02/convenient-ducktyping-in-php/)

Related : [Rubber Ducking Debugging](Rubber Ducking Debugging)
