# $GLOBALS
$GLOBALS is a global variable, that host all other global variables, during a PHP execution. It is also a super-global, because it is always available, even without import.
```php
<?php

global $x;
$x = 'A';

function counter() {
    echo $GLOBALS['A'];
}

foo();

?>
```

Related : [Variables](Variables), [Static Variables](Static Variables), [Variable Variables](Variable Variables), [Global Variables](Global Variables), [Distributed State](Distributed State), [Hidden State](Hidden State), [Implicit State](Implicit State)
