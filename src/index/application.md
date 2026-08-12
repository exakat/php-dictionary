# Application
An application is a software program designed to perform specific tasks for end users. PHP applications can take many forms: web applications served over HTTP, command-line tools, background daemons, REST APIs, batch-processing scripts, etc.

PHP applications are typically structured around a framework or architecture pattern, like MVC, ADR, hexagonal architecture, etc. and a dependency-injection container. The entry point is usually a single ``index.php`` for web apps, or a CLI script invoked via the shell.

PHP applications excel at connecting to various sources of information, to collect, process and store data.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/application.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/application.html","name":"Application","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:31:02 +0000","dateModified":"Sat, 08 Aug 2026 14:31:02 +0000","description":"An application is a software program designed to perform specific tasks for end users","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Application.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"application"}]}]}</script>
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

+ [Terminal User Interface (TUI)](tui.html)
+ [Command Line Interface (CLI)](cli.html)
+ [Desktop Application](desktop-app.html)
+ [Mobile Application](mobile-app.html)
+ [Web Application](web-app.html)
+ [Model - View - Controller (MVC)](mvc.html)
+ [Architectural Decision Record (ADR)](adr.html)
+ [REST API](rest-api.html)
+ [Application Programming Interface (API)](api.html)
+ [GraphQL](graphql.html)
+ [gRPC (Google Remote Procedure Call)](grpc.html)
+ [Software-as-a-Service (SAAS)](saas.html)
+ [PaaS](paas.html)
+ [IaaS](iaas.html)
+ [Microservice](microservice.html)
+ [Monolith](monolith.html)
+ [Single Page Application (SPA)](spa.html)
+ [Content Management System (CMS)](cms.html)
+ [NativePHP](nativephp.html)
+ [Hexagonal Architecture](hexagonal.html)
+ [Clean Architecture](clean-architecture.html)
