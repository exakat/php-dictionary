# variable_order
The ``variable_order`` directive sets the order in which the values are assigned to the ``$_REQUEST`` variable.

The default value for this directive is ``EGPCS``: environment, GET, POST, COOKIE and SESSION. The values are overwritten by the next, so if GET and POST have both an ``$x`` variable, the default configuration only keeps the one from POST, as it is later in the configuration. 

The default configuration ensures that safer values, such as the session's value, are not overwritten by less safe values from GET or POST, for example.
```php
<?php

    // variable_order = EGPCS
    // https://www.example.com/index.php?x=1
    // POST x = 2;
    $_REQUEST['x'] === '2';

?>
```

## See Also

+ [PHP Globals with EGPCS Information](https://phppot.com/php/php-globals-with-egpcs-information/)

Related : [$_REQUEST]($_REQUEST)
