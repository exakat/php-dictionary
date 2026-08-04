# Identity Comparison
The identity comparison ``===`` compares two values, using their respective types, and then, their value. Both must be identical to pass.

There is also the ``!==`` operator, for distinct values: either the type, or the value.
```php
<?php

var_dump(1 === 1);    // true

var_dump(1 === true); // false
var_dump(1 == true);  // true

?>
```

Related : [Comparison](Comparison), [Hash Comparisons](Hash Comparisons), [Identity](Identity)
