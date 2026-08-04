# register_argc_argv
This directive controls the availability of the ``$argv`` and ``$argc`` PHP native variables. By default, the directive is active and the variables are available.
```php
<?php

    if (ini_get('register_argc_argv')) {
        var_dump($argv);
    } else {
        print '$argv and $argc are disabled.';
    }

?>
```

Related : [$argv]($argv), [$argc]($argc), [Directives](Directives)
