# Default Parameter
Methods may define a default value for parameters. That way the parameter may be omitted during the call, and this value will be used. 

The default value may be a static expression, and, since PHP 8.1, also includes a new expression.

The default parameter must be the last of the parameters: adding a parameter without default value after one will yield an error and mess up the call parameters.
```php
<?php

function makeCoffee($type = 'latte') {
    return 'Making a cup of $latte';
}

?>
```

Related : [Functions](Functions), [Method](Method), [Null Pattern](Null Pattern), [Option](Option)
