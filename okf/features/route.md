---
type: "PHP Feature"
title: "Route"
description: "A route links an HTTP URL to a request handler."
resource: "https://webreference.com/php/web-development/routing/"
tags: ["architecture"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://webreference.com/php/web-development/routing/](https://webreference.com/php/web-development/routing/)

## See Also
- [How to create a basic PHP router](https://www.educative.io/answers/how-to-create-a-basic-php-router)
- [Localized route in Laravel with Laralang](https://dev.to/edulazaro/localized-routes-un-laravel-with-laralang-4g0o)

## Related
- [Swagger](/features/swagger.md)
- [Documentation](/features/documentation.md)
- [Controller](/features/controller.md)

## Details
- Packagist: [nikic/fast-route](https://packagist.org/packages/nikic/fast-route)
- Packagist: [symfony/routing](https://packagist.org/packages/symfony/routing)
- Packagist: [altorouter/altorouter](https://packagist.org/packages/altorouter/altorouter)

