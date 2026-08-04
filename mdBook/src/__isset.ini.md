# __isset() Method
``__isset()`` is a magic method: it is called when the existence of a property has to be checked.

That way, it is possible to create dynamically properties, without hardcoding them. 

The ``__isset()`` method is usually paired with the ``__get()`` and ``__set()`` methods.

The ``__isset()`` is called by ``isset()`` and ``empty()``. They are also called by the coalesce operator ``??`` and ``??=``. It is not called on null-safe object operator ``?->``.
```php
<?php

    class X {
        private $values = ['a' => 1,
                           'b' => 2,
                           ];
    
        function __isset($name) {
            return isset($this->values[$name]);
        }
    }
    
    $x = new X;
    var_dump(isset($x->a)); // true 
    var_dump(empty($x->c)); // false 

?>
```

## See Also

+ [A Look At PHP’s isset()](https://medium.com/@liamhammett/a-look-at-phps-isset-df64df7158ab)
+ [__get(), __set(), __isset() and __unset()](https://riptutorial.com/php/example/3635/--get------set------isset---and---unset--)

Related : [Magic Methods](Magic Methods), [__set() Method](__set() Method), [__get() Method](__get() Method), [__unset() Method](__unset() Method), [Isset](Isset), [Null](Null), [Null Safe Object Operator](Null Safe Object Operator), [Magic Property](Magic Property)
