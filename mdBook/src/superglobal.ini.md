# Superglobal Variables
PHP superglobal variables are predefined variables that are accessible from any scope within a PHP script without the need for any special syntax or function calls. These variables are called 'superglobals' because they are automatically available in all scopes, including functions, methods, and the global scope.

PHP provides several superglobal variables, each serving a specific purpose. Here are the most commonly used ones:

+ ``$_SERVER``: contains information about the server and execution environment, such as headers, paths, and script locations
+ ``$_GET``: holds the values of variables passed to the current script via the URL parameters, HTTP GET method
+ ``$_POST``: stores the values of variables sent to the current script via HTTP POST method, usually from an HTML form
+ ``$_REQUEST``: contains the values of both $_GET, $_POST, and $_COOKIE variables, providing a convenient way to access user input data
+ ``$_COOKIE``: holds the values of cookies sent by the client browser to the server
+ ``$_SESSION``: stores and retrieves session variables, which are used to persist data across multiple requests from the same user
+ ``$_FILES``: contains information about uploaded files through an HTML form with ``enctype=\multipart/form-data``
+ ``$_ENV``: holds variables passed to the PHP script from the server's environment.

PHP superglobal variables are also called auto-global, as they are implicitly global, without using the ``global`` keyword.
```php
<?php

    global $x;
    $x = "A";
    
    function counter() {
        echo $GLOBALS['A'];
    }
    
    foo();

?>
```

## See Also

+ [What are superglobals in PHP?](https://www.educative.io/answers/what-are-superglobals-in-php)

Related : [Variables](Variables), [Session](Session), [Static Variables](Static Variables), [Variable Variables](Variable Variables), [Global Variables](Global Variables), [Local Variable](Local Variable)
