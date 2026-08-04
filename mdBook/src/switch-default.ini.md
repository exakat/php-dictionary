# Switch Default
A switch default, also called default, is the catch-all option in a ``switch()`` or a ``match()`` expression. 

In a ``switch()``, the default case may be stacked with other cases, to apply the same code. This is not possible with ``match()``.
```php
<?php

    switch($x) {
        case 'a':
        default:
            $a = 1;
            // fall through
            
        case 'b' :
            $a =2;
            break 1;
    }

?>
```

Related : [Default](Default), [Switch](Switch), [Match](Match), [Switch Case](Switch Case)
