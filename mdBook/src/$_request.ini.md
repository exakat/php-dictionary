# $_REQUEST
An associative array of variables, transmitted to the current script via the HTTP GET and HTTP methods.

When the same name is used both in GET and POST method, the priority is defined by the ``variable_order`` directive. 

The received values are all strings or arrays. They are strings by default, and other scalar types needs a casting. The values are arrays when the URL uses the ``[]`` format. 

``$_REQUEST`` is a superglobal: it is always available, in every scope.
```php
<?php

    // https://www.example.com/index.php?x=1
    $_REQUEST['x'] === '1';
    
    // POST y=abc
    $_REQUEST['y'] === 'abc';
    
    // https://www.example.com/index.php?z[]=def&z[]=ghi
    $_REQUEST['z'] === ['def', 'ghi'];

?>
```

## See Also

+ [The Basics of the PHP Request](https://x-team.com/magazine/basics-php-request)
+ [Comprehensive Explanation of PHP’s $_REQUEST Superglobal for Form Data Handling](https://medium.com/@otabekjurabekov3/comprehensive-explanation-of-phps-request-superglobal-for-form-data-handling-6034ad14827d)

Related : [$_POST]($_POST), [$_GET]($_GET), [$_COOKIE]($_COOKIE), [$_ENV]($_ENV), [Form](Form), [Incoming Data](Incoming Data), [variable_order](variable_order)
