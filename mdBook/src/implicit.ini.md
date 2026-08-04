# Implicit
A feature is implicit when it is available, yet not explicitly visible. 

For example, objects are passed by reference to functions: any change applied to that object, inside the function, is also available in the calling context.

Until PHP 8.4, it was possible to assign ``null`` as a default value to any typed parameter: ``null`` was implicitely an accepted type for that value. 

The contrary to implicit is explicit. This notion share similarities with hidden features and collateral features.
```php
<?php

function foo($object) {
    $object->p = 1;
}

$object = new stdClass();
foo($object);
echo $object->p; 

?>
```

Related : [Explicit](Explicit), [Appeasement Pattern](Appeasement Pattern), [Distributed State](Distributed State), [Hidden State](Hidden State), [Implicit State](Implicit State)
