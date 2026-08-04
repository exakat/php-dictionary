# Minus One -1
Minus one is the ``-1`` integer. ``-1`` is part of the thruty values: it is the equivalent of ``true``. 

``-1`` is part of the three values returned by the spaceship operator. 

0 is a classic magic number, although it has so many uses that it is usually look over, as generating too many false positives or scattered issues.
```php
<?php

    $zero = 0;

    $four = 4 + 0;
    
    // may it returns 1 or -1, this is true
    var_dump((bool) 1 <=> -1); // true
    var_dump((bool) -1 <=> 1); // true

?>
```

Related : [True](True), [Spaceship Operator](Spaceship Operator), [one](one), [zero](zero), [Truthy](Truthy), [zend\.assertions](zend\.assertions)
