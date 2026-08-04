# Application
An application is a software program designed to perform specific tasks for end users. PHP applications can take many forms: web applications served over HTTP, command-line tools, background daemons, REST APIs, batch-processing scripts, etc.

PHP applications are typically structured around a framework or architecture pattern, like MVC, ADR, hexagonal architecture, etc. and a dependency-injection container. The entry point is usually a single ``index.php`` for web apps, or a CLI script invoked via the shell.

PHP applications excel at connecting to various sources of informations, to collect, process and store data.
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

## See Also

+ [PHP: Namespaces and autoloading](https://www.php.net/manual/en/language.namespaces.php)
+ [PHP-FIG: PSR standards](https://www.php-fig.org/psr/)
+ [The Twelve-Factor App](https://12factor.net/)

Related : [Terminal User Interface (TUI)](Terminal User Interface (TUI)), [Command Line Interface (CLI)](Command Line Interface (CLI)), [Desktop Application](Desktop Application), [Mobile Application](Mobile Application), [Web Application](Web Application), [Model - View - Controller (MVC)](Model - View - Controller (MVC)), [Architectural Decision Record (ADR)](Architectural Decision Record (ADR)), [REST API](REST API), [Application Programming Interface (API)](Application Programming Interface (API)), [GraphQL](GraphQL), [gRPC (Google Remote Procedure Call)](gRPC (Google Remote Procedure Call)), [Software-as-a-Service (SAAS)](Software-as-a-Service (SAAS)), [PaaS](PaaS), [IaaS](IaaS), [Microservice](Microservice), [Monolith](Monolith), [Single Page Application (SPA)](Single Page Application (SPA)), [Content Management System (CMS)](Content Management System (CMS)), [NativePHP](NativePHP), [Hexagonal Architecture](Hexagonal Architecture), [Clean Architecture](Clean Architecture)
