# $_COOKIE
The ``$_COOKIE`` variable is a special superglobal variable that stores the name and values of the cookies that were transmitted to the webserver.

The ``$_COOKIE`` variable is an associative array where the keys are the cookies names and the values are the corresponding values passed in the HTTP headers. 

``$_COOKIE`` is a superglobal: it is always available, in every scope.

Values inside ``$_COOKIE`` are always strings or arrays.
```php
<?php

echo $_COOKIE['username'];

?>
```

Related : [$_GET]($_GET), [$_POST]($_POST), [$_REQUEST]($_REQUEST), [$_SERVER]($_SERVER), [$_FILES]($_FILES), [$_ENV]($_ENV)
