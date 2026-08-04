# Autovivification
Autovivification is the automatic creation of an array when a value is dereferenced.

Autovivification from scalars, including true, is deprecated since PHP 7.4 and removed in version 8.0. 

Autovivification from ``false`` is deprecated since PHP 8.1. 

Autovivification from null is valid.
```php
<?php

    $a = false;
    $a[1] = 2;
    
    $b = null;
    $b[3] = 4;

?>
```

## See Also

+ [Autovivification on wikipedia](https://en.wikipedia.org/wiki/Autovivification)

Related : [Null](Null), [False](False), [Array, []](Array, []), [Default Value](Default Value)
