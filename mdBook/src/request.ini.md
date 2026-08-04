# Request
A request is an object that encapsulates an incoming HTTP message: method, URL, headers, query parameters, body, and uploaded files.

PHP frameworks provide a dedicated Request object that replaces direct access to superglobals such as ``$_GET``, ``$_POST``, ``$_SERVER``, and ``$_FILES``. This makes code more testable and explicit.

PSR-7 defines a standard ``ServerRequestInterface`` that many frameworks and libraries implement, enabling interoperability.
```php
<?php

// PSR-7 style
use Psr\Http\Message\ServerRequestInterface;

function handle(ServerRequestInterface $request): void {
    $method = $request->getMethod();           // 'POST'
    $query  = $request->getQueryParams();      // $_GET equivalent
    $body   = $request->getParsedBody();       // $_POST equivalent
    $header = $request->getHeaderLine('Accept');
}

// Laravel / Symfony style
use Illuminate\Http\Request;

class UserController {
    public function store(Request $request): Response {
        $name  = $request->input('name');
        $email = $request->input('email');
    }
}

?>
```

## See Also

+ [Symfony HttpFoundation Request](https://symfony.com/doc/current/components/http_foundation.html)
+ [Laravel Requests](https://laravel.com/docs/12.x/requests)

Related : [$_REQUEST]($_REQUEST), [$_GET]($_GET), [$_POST]($_POST), [$_SERVER]($_SERVER), [Controller](Controller), [Route](Route), [Middleware Pattern](Middleware Pattern), [Incoming Data](Incoming Data), [Form](Form)
