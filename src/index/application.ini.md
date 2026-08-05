# Application
An application is a software program designed to perform specific tasks for end users. PHP applications can take many forms: web applications served over HTTP, command-line tools, background daemons, REST APIs, batch-processing scripts, etc.

PHP applications are typically structured around a framework or architecture pattern, like MVC, ADR, hexagonal architecture, etc. and a dependency-injection container. The entry point is usually a single ``index.php`` for web apps, or a CLI script invoked via the shell.

PHP applications excel at connecting to various sources of informations, to collect, process and store data.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/application.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/application.ini.html","name":"Application","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"An application is a software program designed to perform specific tasks for end users","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Application.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

declare(strict_types=1);

// Bootstrap the application
require __DIR__ . '/vendor/autoload.php';

// Route incoming HTTP request
$uri    = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

$router = new Router();
$router->get('/',      [HomeController::class,  'index']);
$router->get('/about', [AboutController::class, 'index']);

$response = $router->dispatch($method, $uri);
$response->send();

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Application_software)**
## See Also

+ [PHP: Namespaces and autoloading](https://www.php.net/manual/en/language.namespaces.php)
+ [PHP-FIG: PSR standards](https://www.php-fig.org/psr/)
+ [The Twelve-Factor App](https://12factor.net/)

## Related

+ [Terminal User Interface (TUI)](tui.ini.html)
+ [Command Line Interface (CLI)](cli.ini.html)
+ [Desktop Application](desktop-app.ini.html)
+ [Mobile Application](mobile-app.ini.html)
+ [Web Application](web-app.ini.html)
+ [Model - View - Controller (MVC)](mvc.ini.html)
+ [Architectural Decision Record (ADR)](adr.ini.html)
+ [REST API](rest-api.ini.html)
+ [Application Programming Interface (API)](api.ini.html)
+ [GraphQL](graphql.ini.html)
+ [gRPC (Google Remote Procedure Call)](grpc.ini.html)
+ [Software-as-a-Service (SAAS)](saas.ini.html)
+ [PaaS](paas.ini.html)
+ [IaaS](iaas.ini.html)
+ [Microservice](microservice.ini.html)
+ [Monolith](monolith.ini.html)
+ [Single Page Application (SPA)](spa.ini.html)
+ [Content Management System (CMS)](cms.ini.html)
+ [NativePHP](nativephp.ini.html)
+ [Hexagonal Architecture](hexagonal.ini.html)
+ [Clean Architecture](clean-architecture.ini.html)
