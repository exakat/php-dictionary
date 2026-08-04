# BackedEnum
The ``BackedENum`` interface identifies an enumeration with a string or int value. It works only on backed-enumerations.

This interface is only available for type checks, and cannot be implemented by another class.

This interface ensure the ``enum::tryFrom()`` and ``enum::from()`` methods and the ``enum::$value`` property are available, to convert from and to scalars.
```php
<?php

enum E { case A;} 
enum F: int { case B = 1;} 

var_dump(E::A instanceof BackedEnum); // false
var_dump(F::B instanceof BackedEnum); // true

?>
```

## See Also

+ [Use the PHP UnitEnum::cases() during testing](https://medium.com/@kczereczon/usage-php-unitenum-cases-in-testing-cf178a5ac372)

Related : [Enumeration (enum)](Enumeration (enum)), [UnitEnum](UnitEnum), [String](String), [integer](integer), [Interface](Interface), [PHP Native Interfaces](PHP Native Interfaces), [Unbacked Enum](Unbacked Enum)
