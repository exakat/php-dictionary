# serialize_precision
The ``serialize_precision`` PHP ini directive controls the number of significant digits used when serializing float values via ``serialize()`` and ``json_encode()``.

Since PHP 7.1, the default is ``-1``, which uses the minimum number of digits needed to uniquely represent each float, ensuring round-trip fidelity. A positive integer value uses that many significant digits instead, which may introduce rounding.
```php
<?php

    // With serialize_precision = -1 (default since PHP 7.1)
    $value = 3.141592653589793;
    echo json_encode($value);
    // outputs: 3.141592653589793
    
    // With serialize_precision = 14
    // outputs: 3.1415926535898

?>
```

## See Also

+ [precision](https://www.php.net/manual/en/ini.core.php#ini.precision)

Related : [Directives](Directives), [Floating Point Numbers](Floating Point Numbers), [precision](precision), [Serialization](Serialization), [SplSubject](SplSubject)
