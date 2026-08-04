# Library Loading
PHP has a modular structure, which allows it to load extensions. The extensions may be part of PHP at compilation time, and always available: this is the case for ``core``, or ``string``. 

On the other hand, some extensions are loaded dynamically, with the ``dl()`` function. This is done during execution. It usually has an impact on performance, and security, and was restricted to be used only in command line, not on web servers.
```php
<?php

if (!extension_loaded('sqlite3')) {
    dl('sqlite3.so');
}

?>
```

Related : [Extensions](Extensions), [Foreign Function Interface (FFI)](Foreign Function Interface (FFI))
