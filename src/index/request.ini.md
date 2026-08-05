# Request
A request is an object that encapsulates an incoming HTTP message: method, URL, headers, query parameters, body, and uploaded files.

PHP frameworks provide a dedicated Request object that replaces direct access to superglobals such as ``$_GET``, ``$_POST``, ``$_SERVER``, and ``$_FILES``. This makes code more testable and explicit.

PSR-7 defines a standard ``ServerRequestInterface`` that many frameworks and libraries implement, enabling interoperability.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/request.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/request.ini.html","name":"Request","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:43:55 +0000","dateModified":"Mon, 13 Jul 2026 18:43:55 +0000","description":"A request is an object that encapsulates an incoming HTTP message: method, URL, headers, query parameters, body, and uploaded files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Request.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php-fig.org/psr/psr-7/)**
## See Also

+ [Symfony HttpFoundation Request](https://symfony.com/doc/current/components/http_foundation.html)
+ [Laravel Requests](https://laravel.com/docs/12.x/requests)

## Related

+ [$\_REQUEST]($_request.ini.html)
+ [$\_GET]($_get.ini.html)
+ [$\_POST]($_post.ini.html)
+ [$\_SERVER]($_server.ini.html)
+ [Controller](controller.ini.html)
+ [Route](route.ini.html)
+ [Middleware Pattern](middleware.ini.html)
+ [Incoming Data](incoming-data.ini.html)
+ [Form](form.ini.html)

## Related packages

+ [psr/http-message](https://packagist.org/packages/psr/http-message)
+ [nyholm/psr7](https://packagist.org/packages/nyholm/psr7)
