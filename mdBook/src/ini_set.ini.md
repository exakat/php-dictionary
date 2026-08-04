# ini_set()
``ini_set()`` is a PHP native function which can change PHP directive, during execution. This is useful to make a specific limit different, depending on the part of the application which runs. It might also be a security problem, when directives are used to protect the system, and are lifted with this function. However, some directives cannot be changed by this function, such as ``disable_classes`` for example.

The impact of ``ini_set()`` only applies to the current request. It will be reset to its default value with the next request.

The complement to this function is ``ini_get()``, which collect the value of a directive without changing it; and ``ini_restore()``, which reset the directives to their initial value.
```php
<?php

    print ini_get('memory_limit'); // for example 128M

    ini_set('memory_limit', '1024M'); // now, 1 Gb

?>
```

## See Also

+ [The ini_set Function](https://code.mu/en/php/manual/conf/ini_set/)

Related : [php\.ini](php\.ini), [Directives](Directives), [max_execution_time](max_execution_time)
