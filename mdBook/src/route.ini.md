# Route
A route links an HTTP URL to a request handler. 

Routes may be a few, for which a basic system such as a switch is sufficient, to very numerous, where is it handled by a routing system or even the architecture.
```php
<?php

switch ($_SERVER['REQUEST_URI']) {

    // handle home page
    case '/':
        require '/controller/homepage.php';
        break;

    // handle all other pages
    default:
        require '/controller/404.php';
        break;
}

?>
```

## See Also

+ [How to create a basic PHP router](https://www.educative.io/answers/how-to-create-a-basic-php-router)

Related : [Swagger](Swagger), [Documentation](Documentation), [Controller](Controller)
