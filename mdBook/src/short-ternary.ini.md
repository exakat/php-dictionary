# Short Ternary Operator
The expression ``(expr1) ?: (expr3)`` evaluates to ``expr2`` if ``expr1`` evaluates to ``empty()``, and ``expr3`` if ``expr1`` evaluates to ``false``.

It is a short version of the ternary operator, and it is often used to set default values in a concise way.
```php
<?php

    $action = $_POST['action'] ?: 'default';

?>
```

## See Also

+ [Shorthand Comparisons in PHP](https://stitcher.io/blog/shorthand-comparisons-in-php)

Related : [Ternary Operator](Ternary Operator), [Coalesce Operator](Coalesce Operator), [Empty](Empty), [False](False)
