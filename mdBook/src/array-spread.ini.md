# Array Spread
Array spread is the ellipsis operator, applied to an array. Then, the array itself is replaced by each of its own element, as if each element was spread from the array.
```php
<?php

$a = [1,2,3];
$b = [...$a, 4,5];

// $b === [1,2,3,4,5];

?>
```

## See Also

+ [PHP Spread Operator](https://www.phptutorial.net/php-tutorial/php-spread-operator/)

Related : [Ellipsis](Ellipsis), [Three Dots](Three Dots), [Variadic](Variadic)
