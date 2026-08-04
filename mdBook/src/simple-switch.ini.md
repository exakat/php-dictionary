# Simple Switch
A simple switch is a switch where all the cases are simple literals. This helps PHP optimize the command and finds the correct case immediately, instead of checking them one by one.
```php
<?php

switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}

?>
```

## See Also

+ [PHP 7.2's 'switch' optimisations](https://derickrethans.nl/php7.2-switch.html)

Related : [Switch](Switch), [Match](Match), [If Then Else](If Then Else), [Compact Array](Compact Array)
