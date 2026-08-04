# Yoda Condition
Yoda condition is a way to write condition by using any literal value on the left, instead of the right.

This prevents errors where the comparison operator is shortened, and turned into an assignation, which is usually true.
```php
<?php

    // Yoda condition
    if (0 == $a) {}
    
    // Assignation, instead of comparison and bug
    if ($a = 0) {}

?>
```

## See Also

+ [Why using Yoda conditions you should probably not be](https://dev.to/greg0ire/why-using-yoda-conditions-you-should-probably-not)
+ [Rule yoda_style](https://cs.symfony.com/doc/rules/control_structure/yoda_style.html)

Related : [Coding Conventions](Coding Conventions), [Pattern](Pattern), [Condition](Condition), [Explicit Boolean Comparison](Explicit Boolean Comparison)
