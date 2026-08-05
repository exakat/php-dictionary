# Route
A route links an HTTP URL to a request handler. 

Routes may be a few, for which a basic system such as a switch is sufficient, to very numerous, where is it handled by a routing system or even the architecture.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/route.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/route.ini.html","name":"Route","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:08:19 +0000","dateModified":"Wed, 05 Aug 2026 08:08:19 +0000","description":"A route links an HTTP URL to a request handler","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Route.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Swagger](swagger.ini.html)
+ [Documentation](documentation.ini.html)
+ [Controller](controller.ini.html)

## Related packages

+ [nikic/fast-route](https://packagist.org/packages/nikic/fast-route)
+ [symfony/routing](https://packagist.org/packages/symfony/routing)
+ [altorouter/altorouter](https://packagist.org/packages/altorouter/altorouter)
