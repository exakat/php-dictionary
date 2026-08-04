# Class Constant Syntax
The class constant syntax is the full name of a class constant, formalized in a string. It is ``namespace\class-name::constant-name``.

That representation requires the name of the class to be include the full namespace path, with or without the leading ``\``.

The class constant syntax does not work with local ``use`` expressions.

The class constant syntax works with the ``constant()`` and ``defined()`` functions.
```php
<?php

namespace X\Y;

use A as D;

class A {
    const B = 'C';
}

echo constant('\X\Y\A::B');
echo constant('X\Y\A::B');
echo constant('D::B'); // error, no such class as D

?>
```

Related : [Static Constant](Static Constant), [Constants](Constants), [defined()](defined()), [constant()](constant()), [Dynamic Constant](Dynamic Constant)
