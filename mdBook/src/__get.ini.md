# __get() Method
``__get()`` is a magic method: it is utilized for reading data from inaccessible, either protected or private, or non-existing properties.

That way, it is possible to create dynamically properties, without hardcoding them.

The ``__get()`` method is usually paired with the ``__set()`` method.

The method signature is ``public function __get(string $name): mixed``. The ``$name`` argument is the name of the property being interacted with. 

The method must be declared as ``public``, or it is implicit. Arguments cannot be passed by reference. Property overloading only works in object context and will not be triggered in static context. 

``__get()`` is never called when chaining assignments together like ``$a = $obj->b = 8;``. PHP will not call an overloaded method from within the same overloaded method: writing ``return $this->foo`` inside of ``__get()`` will return ``null`` and raise an ``E_WARNING`` if there is no ``foo`` property defined, rather than calling ``__get()`` a second time.
```php
<?php

    class X {
        private $values = ['a' => 1,
                           'b' => 2,
                           ];
    
        // Checks the dictionary, or return 0
        function __get($name) {
            if (isset($this->values[$name])) {
                return $this->values[$name];
            }
            
            return 0;
        }
    }

?>
```

## See Also

+ [What are magic methods and how to use them in PHP ?](https://www.geeksforgeeks.org/what-are-magic-methods-and-how-to-use-them-in-php/)
+ [__get(), __set(), __isset() and __unset()](https://riptutorial.com/php/example/3635/--get------set------isset---and---unset--)

Related : [Magic Methods](Magic Methods), [__set() Method](__set() Method), [__isset() Method](__isset() Method), [Magic Constants](Magic Constants), [Magic Methods](Magic Methods), [Magic Property](Magic Property), [Property Hook](Property Hook)
