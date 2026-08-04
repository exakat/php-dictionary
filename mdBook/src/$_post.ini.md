# $_POST
``$_POST`` is an associative array of variables, transmitted to the current script via the HTTP POST method, with the MIME types ``application/x-www-form-urlencoded`` or ``multipart/form-data``.

The received values are all strings or arrays. They are strings by default, and other scalar types needs a casting. The values are arrays when the URL uses the ``[]`` format. 

``$_POST`` is a superglobal: it is always available, in every scope.

Values inside ``$_POST`` are always strings, or arrays.
```php
<?php

    // POST x=1
    $_POST['x'] === '1';
    
    // POST y=abc
    $_POST['y'] === 'abc';
    
    // POST z[]=def
    // POST z[]=ghi
    $_POST['z'] === ['def', 'ghi'];

?>
```

## See Also

+ [How To Use The $_POST[] Variable In PHP](https://medium.com/@javasper/how-to-use-the-post-variable-in-php-d607cfc5891c)

Related : [$_GET]($_GET), [$_REQUEST]($_REQUEST), [$_COOKIE]($_COOKIE), [$_ENV]($_ENV), [$_SERVER]($_SERVER), [Form](Form), [Incoming Data](Incoming Data)
