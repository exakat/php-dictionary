# Global Code
The global code is the code that doesn't belong to any method or function. Since PHP has no ``main()`` method that is called upon execution, the global code in the first file called is used. It is responsible to make the first calls to objects and functions.

Global code is usually organised in a sequential manner. Once the bootstrapping, which create the first objects, install autoload, detect environment, is done, the global code calls one object and let it handle the request.
```php
<?php

// This is the global code
foo();

function foo() {}

?>
```

Related : [Bootstrap](Bootstrap), [Order Of Execution](Order Of Execution)
