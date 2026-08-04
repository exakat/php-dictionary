# Directives
Directives are the configuration option of PHP. They may be set in the ``php.ini`` file, in HTTP server files like ``.htaccess``, or accessed via the ``ini_get()`` and ``ini_set()`` native calls. 

Directives are also set by PHP extensions or by PHP applications.
```php
<?php

    echo 'display_errors = ' . ini_get('display_errors') . "\n";
    echo 'register_globals = ' . ini_get('register_globals') . "\n";
    echo 'post_max_size = ' . ini_get('post_max_size') . "\n";
    echo 'post_max_size+1 = ' . (ini_get('post_max_size')+1) . "\n";
    echo 'post_max_size in bytes = ' . return_bytes(ini_get('post_max_size'));

?>
```

Related : [Extensions](Extensions), [php\.ini](php\.ini), [\.htaccess](\.htaccess), [Configuration](Configuration), [Enable](Enable), [Flag](Flag), [ini_set()](ini_set()), [html_errors](html_errors), [max_execution_time](max_execution_time), [Register Globals](Register Globals), [register_argc_argv](register_argc_argv), [serialize_precision](serialize_precision)
