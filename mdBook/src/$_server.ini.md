# $_SERVER
The ``$_SERVER`` variable is a special superglobal variable that holds information about the headers, scripts and path locations.

The entries in this array are created by the web server, therefore there is no guarantee that every web server provides any of these.

The ``$_SERVER`` variable is an associative array where the keys are the variable names and the values are the corresponding values.

``$_SERVER`` is a superglobal: it is always available, in every scope.


```php
<?php

echo $_SERVER['PHP_SELF'];

?>
```

Related : [$_POST]($_POST), [$_GET]($_GET), [$_FILES]($_FILES), [$_COOKIE]($_COOKIE), [$_ENV]($_ENV), [$GLOBALS]($GLOBALS), [HTTP Request Headers](HTTP Request Headers), [Internet Protocol (IP)](Internet Protocol (IP))
