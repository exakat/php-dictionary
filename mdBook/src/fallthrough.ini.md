# Switch Fallthrough
A fallthrough is the absence of break, or equivalent, at the end of a switch case. That way, the execution continues on the next case. 

While this is an intended feature, and is useful to reduce code, it tends to surprise programmers, who expect the cases to always end.
```php
<?php

switch ($a) {
    case 1:
        $a = 2 * $a;
        // fallthrough here : the execution continues
        
    case 2:
        $a = $a + 1;
        break;
}

?>
```

## See Also

+ [PHP switch Statement](https://www.codeguage.com/courses/php/control-flow-switch)

Related : [Match](Match)
