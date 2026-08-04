# is_object()
``is_object()`` is a PHP native function that checks if the content of a variable is an object or not, without consideration for the actual class. It is the equivalent of ``object`` type, which cannot be used with ``instanceof``; or the ``(object)`` cast, that turns a value into an object of class ``stdClass``.

``is_object()`` is rarely used, as ``instanceof`` with the expected class or interface is more precise.
```php
<?php

var_dump(is_object((object)[])); // true

$x = new stdClass();
var_dump(is_object($x)); // true

$x = 1;
var_dump(is_object($x)); // false

?>
```

Related : [instanceof](instanceof), [stdclass](stdclass), [is_a()](is_a())
