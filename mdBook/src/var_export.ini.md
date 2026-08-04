# var_export()
``var_export()`` is a PHP native function that produces a representation of the passed data as PHP code.

``var_export()`` is used for cache, by storing an intermediate result for later inclusion. ``var_export()`` is also used for storing PHP data, and later accessing them in their current form: it by-pass the process of serializing/unserializing by using PHP as the serialization itself.

``var_export()`` is usually replaced by ``print_r()``, ``var_dump()`` or other adapted functions when it is immediately displayed, during development session.

```php
<?php

    print var_export(1); // 1
    
    print var_export(abc); // 'abc'
    
    $a = [1, 3, 4];
    $a[] = 5;
    print var_export($a); // 
    
    class X {
        public string $p = 'yes';
    }
    
    $x = new X();
    $x->p = 'PHP rocks';
    print var_export($a); // 

?>
```

Related : [print_r()](print_r()), [Serialization](Serialization), [Cache](Cache), [var_dump()](var_dump())
