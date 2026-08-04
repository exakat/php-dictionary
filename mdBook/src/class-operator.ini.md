# Class Operator
Class operator is the ``::class``, added to a class, interface, trait or enumeration identifier. It returns the fully qualified name of the class, according to the current code. 

``::class`` is affected by ``use`` expressions, but not by ``class_alias()`` function.
```php
<?php

// class operator in action
// This is an unknown class, so it displays A\B
echo A\B::class;

// This is an 'use' class, so it displays A\B
use A\B as D;
echo D::class;

// class_alias creates a new class, so it is different. 
class E{}
class_alias('E', 'F');
echo F::class;

?>
```

Related : [Use](Use)
