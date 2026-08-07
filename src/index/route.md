# Route
A route links an HTTP URL to a request handler. 

Routes may be a few, for which a basic system such as a switch is sufficient, to very numerous, where is it handled by a routing system or even the architecture.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/route.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/route.html","name":"Route","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:08:19 +0000","dateModified":"Wed, 05 Aug 2026 08:08:19 +0000","description":"A route links an HTTP URL to a request handler","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Route.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Route"}]}]}</script>
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

**[Documentation](https://webreference.com/php/web-development/routing/)**
## See Also

+ [How to create a basic PHP router](https://www.educative.io/answers/how-to-create-a-basic-php-router)
+ [Localized route in Laravel with Laralang](https://dev.to/edulazaro/localized-routes-un-laravel-with-laralang-4g0o)

## Related

+ [Swagger](swagger.html)
+ [Documentation](documentation.html)
+ [Controller](controller.html)

## Related packages

+ [nikic/fast-route](https://packagist.org/packages/nikic/fast-route)
+ [symfony/routing](https://packagist.org/packages/symfony/routing)
+ [altorouter/altorouter](https://packagist.org/packages/altorouter/altorouter)
