# Dynamic Loading
Dynamic Loading is related to the loading of PHP extensions, at execution time. 

Most of the time, the extensions are compiled with PHP, and loaded at startup. For development purposes, or for distribution purposes, some libraries may be loaded at execution time, with the ``dl()`` function.

``dl()`` calls are considered bad for performances and for security.
```php
<?php

    // add extra features to PHP
    dl('ldap.so');

?>
```

Related : [Dynamic](Dynamic), [Extensions](Extensions), [Foreign Function Interface (FFI)](Foreign Function Interface (FFI)), [Library](Library), [Native](Native), [Performance](Performance), [Security](Security)
