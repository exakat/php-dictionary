# Function Subscripting
Function subscripting is the ability to apply operators like ``->``, ``?->`` or ``[<index>]`` directly on the results of a method call.

Using types, it is possible to ensure the previous call returns a valid array or object. When left unchecked, the subscripting leads to warnings or fatal errors.

```php
<?php

    // displays the third element of the response of 'callMethod', on object 'getObject';
    echo getObject()->callMethod()[3];

?>
```

Related : [Dereferencing](Dereferencing)
