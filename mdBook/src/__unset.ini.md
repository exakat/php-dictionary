# __unset() Method
``__unset()`` is a magic method: it is called when the code unsets, or removes a magic property. That way, it is possible to remove dynamically properties. Hardcoded properties are reset to their default state, and do not call this magic method.

The ``__unset()`` method is usually paired with the ``__isset()`` and ``__set()`` methods.
```php
<?php

    class X {
        private $values = ['a' => 1,
                           'b' => 2,
                           ];
    
        function __unset($name) {
            unset($this->values[$name]);
        }
    
        function __isset($name) {
            return isset($this->values[$name]);
        }
    
        function __set($name, $value) {
            $this->values[$name] = $value;
        }
    }

?>
```

## See Also

+ [__get(), __set(), __isset() and __unset()](https://riptutorial.com/php/example/3635/--get------set------isset---and---unset--)

Related : [Magic Methods](Magic Methods), [__set() Method](__set() Method), [__isset() Method](__isset() Method), [Magic Constants](Magic Constants), [Magic Property](Magic Property)
