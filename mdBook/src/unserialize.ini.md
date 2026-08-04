# Unserialization
Unserialization is the extraction of an object from a string representation of an object.

The reverse process is serialization. 

There are different ways to implement serialization. The native way is to rely on the ``serialize()`` and ``unserialize()``, which, in turn, rely on the ``__serialize()`` and ``__unserialize()`` magic method. Then, ``var_export()`` and ``require()`` make another serialization method. WDDX, XML, JSON or YAML all work as serialization, yet they usually are not considered, over speed or performance issues.
```php
<?php

    class X {
        private const X = 1;
        
        function foo() {
            // same as \X::C;
            return self::C;
        }
    }

?>
```

## See Also

+ [Benchmarking serialization](https://peakd.com/hive-168588/@crell/benchmarking-serialization)
+ [The Dangers of PHP’s unserialize and How to stay safe](https://heera.it/the-dangers-of-phps-unserialize-and-how-to-stay-safe)
+ [unserialize.com](https://www.unserialize.com)

Related : [__serialize() Method](__serialize() Method), [__unserialize() Method](__unserialize() Method), [Insecure Deserialization](Insecure Deserialization)
