# Writing
Writing is the action to replace a value in a data container with another one. It does not need to be read. The value is simply changed.

Writing happens when a value is being assigned a new value, used with some operators such as ``++`` or ``--``. 

This operation is usually the counterpart of reading. It may also happen at the same time.
```php
<?php

$x = 1; // writing 1

++$x; // reading 1 and writing 2 

echo $x; // reading 2

?>
```

Related : [Reading](Reading)
