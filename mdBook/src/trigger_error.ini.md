# trigger_error()
``trigger_error()`` is a PHP native function, which raises an error, in the style of PHP engine. It can raise ``notice``, ``warning``, ``deprecated`` and ``error``.
```php
<?php

    echo $a;

    trigger_error('This is a warning, that says: Undefined variable $x', E_USER_WARNING);

?>
```

## See Also

+ [The trigger_error Function](https://code.mu/en/php/manual/error/trigger_error/)

Related : [@, No Scream Operator](@, No Scream Operator), [Error Reporting](Error Reporting), [set_error_handler()](set_error_handler())
