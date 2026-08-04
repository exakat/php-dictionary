# php://input
``php://input`` is a special read-only stream that gives access the raw body of an incoming HTTP request. It does not work with CLI environment.

When a browser sends data to the web server, PHP parses it into superglobals like ``$_POST``. But sometimes the exact raw payload is needed: that's where ``php://input`` comes in.

The raw data used to be accessed via ``$HTTP_RAW_POST_DATA``, but this is a deprecated feature.
```php
<?php

    $incoming = file_get_contents('php://input');

?>
```

## See Also

+ [How to receive JSON POST with PHP ?](https://www.geeksforgeeks.org/php/how-to-receive-json-post-with-php/)

Related : [Hyper Text Transfer Protocol (HTTP)](Hyper Text Transfer Protocol (HTTP)), [Stream](Stream), [file_get_contents()](file_get_contents()), [$HTTP_RAW_POST_DATA]($HTTP_RAW_POST_DATA), [php://output](php://output)
