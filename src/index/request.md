# Request
A request is an object that encapsulates an incoming HTTP message: method, URL, headers, query parameters, body, and uploaded files.

PHP frameworks provide a dedicated Request object that replaces direct access to superglobals such as ``$_GET``, ``$_POST``, ``$_SERVER``, and ``$_FILES``. This makes code more testable and explicit.

PSR-7 defines a standard ``ServerRequestInterface`` that many frameworks and libraries implement, enabling interoperability.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/request.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/request.html","name":"Request","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A request is an object that encapsulates an incoming HTTP message: method, URL, headers, query parameters, body, and uploaded files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Request.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"request"}]}]}</script>
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

+ [$\_REQUEST]($_request.html)
+ [$\_GET]($_get.html)
+ [$\_POST]($_post.html)
+ [$\_SERVER]($_server.html)
+ [Controller](controller.html)
+ [Route](route.html)
+ [Middleware Pattern](middleware.html)
+ [Incoming Data](incoming-data.html)
+ [Form](form.html)

## Related packages

+ [psr/http-message](https://packagist.org/packages/psr/http-message)
+ [nyholm/psr7](https://packagist.org/packages/nyholm/psr7)
