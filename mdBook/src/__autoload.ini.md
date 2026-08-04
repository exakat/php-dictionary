# __autoload
``__autoload()`` was the name of the userland function, used to load classes when they were not found yet in the current execution environment. 

``__autoload()`` was later replaced with ``spl_autoload_register()``, which allows the composition of multiple autoloading methods.
```php
<?php

    function __autoload($name) {
        if (file_exists(classes/$name.php)) {
            include classes/$name.php;
        }
    }

?>
```

Related : [Class Autoloading](Class Autoloading)
