# $http_response_header
``$http_response_header`` contains the list of HTTP headers, as returned after a remote URI call, with ``fopen()`` or ``file_get_contents()``. It is the same as the result of the function ``get_headers()``.

In general, ``error_get_last()`` should be used instead of ``$php_errormsg``, although this function returns an array, not a string.

This feature is deprecated in version 8.5.
```php
<?php

    // Example extracted from the manual
    function get_contents() {
        file_get_contents('http://example.com');
        var_dump($http_response_header); // variable is populated in the local scope
    }

    get_contents();
    var_dump($http_response_header); // a call to get_contents() does not populate the variable outside the function scope
    
?>
```

## See Also

+ [PHP $http_response_header](https://www.tutorialspoint.com/article/php-http-response-header)

Related : [fopen()](fopen()), [file_get_contents()](file_get_contents())
