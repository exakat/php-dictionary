# Identical Operator
Identical is the state of two variables, which contains the same data, with the same type. It is the same as equality, without the type-juggling.

Identical operators are ``===``, ``!==``. The ``match()`` command also uses identical comparisons.
```php
<?php

var_dump(0 == "0000"); // true
var_dump(0 === "0");   // false
var_dump(0 === 0);     // true

?>
```

## See Also

+ [How do the PHP equality (== double equals) and identity (=== triple equals) comparison operators differ?](https://www.geeksforgeeks.org/how-do-the-php-equality-double-equals-and-identity-triple-equals-comparison-operators-differ/)

Related : [Comparison](Comparison), [Equal Operator](Equal Operator), [Match](Match), [Relaxed Comparison](Relaxed Comparison), [array_search](array_search), [strpos](strpos)
