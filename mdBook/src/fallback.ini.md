# Fallback
A fallback refers to a backup plan or default behavior that is executed when the primary operation fails, is unavailable, or doesn't meet certain conditions. It ensures that the system or application can function, either by default, or if something unexpected happens.

+ Fallback to global is the mechanism that uses PHP native function, in the global namespace, when they are not found in the local namespace
+ Fallback constant to string was a mechanism to use the literal constant name instead of its value, when the constant was not defined. It is now removed
+ A default value is a fallback mechanism.


```php
<?php

namespace A;

// function A\strtolower does not exists, so it uses \strtolower
echo strtolower('ABC');

?>
```

Related : [Fallback To Global](Fallback To Global), [Fallback Function](Fallback Function), [Default Value](Default Value)
