# Default
``default`` is a PHP keyword, used with ``switch()`` and ``match()`` structures. It represents any case that was not already considered.
```php
<?php

switch ($i) {
    case 0:
        echo 'i equals 0';
        break;
    case 1:
        echo 'i equals 1';
        break;
    default:
        echo 'i is not 0 nor 1';
        break;
}

?>
```

Related : [Switch](Switch), [Match](Match), [Case](Case), [Default Value](Default Value), [Switch Case](Switch Case), [Switch Default](Switch Default)
