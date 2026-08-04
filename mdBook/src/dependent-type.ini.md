# Dependent Type
A dependent type is a type whose definition depends on a value. 

PHP does not support dependent type explicitly, though several situations behaves in a similar manner.
```php
<?php

    print abs(-1); // 1, as integer
    print abs(-1.33); // 1.33, as float

?>
```

Related : [Type System](Type System), [Type Inference](Type Inference)
