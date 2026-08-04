# Use Alias
The ``use`` operator can create aliases for a class, function or constant. After the declaration of the alias, it is possible to use the original class with the alias name. 

With PHP fallback mechanism, it is possible to declare locally a function with the name of a native PHP function. This is useful to mock such functions.
```php
<?php

use A as B;
use const C as D;
use function foo as strtlower; // very confusing


class A {}

new A;
new B;

?>
```

Related : [Alias](Alias), [As](As), [Namespace Alias](Namespace Alias), [Namespaces](Namespaces), [Use](Use), [Mock](Mock), [Collision](Collision), [Global Space](Global Space)
