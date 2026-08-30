---
type: "PHP Feature"
title: "Application"
description: "An application is a software program designed to perform specific tasks for end users."
resource: "https://en.wikipedia.org/wiki/Application_software"
tags: ["application"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Application

An application is a software program designed to perform specific tasks for end users. PHP applications can take many forms: web applications served over HTTP, command-line tools, background daemons, REST APIs, batch-processing scripts, etc.

PHP applications are typically structured around a framework or architecture pattern, like MVC, ADR, hexagonal architecture, etc. and a dependency-injection container. The entry point is usually a single ``index.php`` for web apps, or a CLI script invoked via the shell.

PHP applications excel at connecting to various sources of information, to collect, process and store data.

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

## Documentation
- [https://en.wikipedia.org/wiki/Application_software](https://en.wikipedia.org/wiki/Application_software)

## See Also
- [Namespaces](https://www.php.net/manual/en/language.namespaces.php)
- [PHP-FIG: PSR Standards](https://www.php-fig.org/psr/)
- [The Twelve-Factor App](https://12factor.net/)

## Related
- [Terminal User Interface (TUI)](/features/tui.md)
- [Command Line Interface (CLI)](/features/cli.md)
- [Desktop Application](/features/desktop-app.md)
- [Mobile Application](/features/mobile-app.md)
- [Web Application](/features/web-app.md)
- [Model - View - Controller (MVC)](/features/mvc.md)
- [Architectural Decision Record (ADR)](/features/adr.md)
- [REST API](/features/rest-api.md)
- [Application Programming Interface (API)](/features/api.md)
- [GraphQL](/features/graphql.md)
- [gRPC (Google Remote Procedure Call)](/features/grpc.md)
- [Software-as-a-Service (SAAS)](/features/saas.md)
- [PaaS](/features/paas.md)
- [IaaS](/features/iaas.md)
- [Microservice](/features/microservice.md)
- [Monolith](/features/monolith.md)
- [Single Page Application (SPA)](/features/spa.md)
- [Content Management System (CMS)](/features/cms.md)
- [NativePHP](/features/nativephp.md)
- [Hexagonal Architecture](/features/hexagonal.md)
- [Clean Architecture](/features/clean-architecture.md)

