# Equal Operator
Equal is the state of two variables, which contains the same data, after an optional cast to a common type. It is the same as identical, with possible silent type-juggling.

The equal operators are ``==``, ``!=``, ``<>``, and ``<=>``. The ``switch()`` command also uses equal comparisons.
```php
<?php

    var_dump(0 == '0000'); // true
    var_dump(0 == '0');    // false
    var_dump(0 == 0);      // true

?>
```

## See Also

+ [How do the PHP equality (== double equals) and identity (=== triple equals) comparison operators differ?](https://www.geeksforgeeks.org/how-do-the-php-equality-double-equals-and-identity-triple-equals-comparison-operators-differ/)

Related : [Comparison](Comparison), [Identical Operator](Identical Operator), [Inequality](Inequality)
