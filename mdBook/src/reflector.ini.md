# Reflector
``Reflector`` is the base interface that all PHP Reflection classes implement. It declares ``__toString()``, providing a common type for all reflection objects.

All reflection classes, ``ReflectionClass``, ``ReflectionMethod``, ``ReflectionFunction``, ``ReflectionProperty``, ``ReflectionParameter``, etc., implement this interface, allowing code to accept any reflector generically.
```php
<?php

    function describeReflector(Reflector $r): void {
        echo (string) $r . PHP_EOL;
    }
    
    describeReflector(new ReflectionClass(DateTime::class));
    describeReflector(new ReflectionFunction('array_map'));

?>
```

## See Also

+ [ReflectionClass Class](https://www.php.net/manual/en/class.reflectionclass.php)

Related : [Reflection](Reflection), [Interface](Interface), [PHP Native Interfaces](PHP Native Interfaces), [Introspection](Introspection), [SplSubject](SplSubject)
