.. _application:
.. meta::
	:description:
		Application: An application is a software program designed to perform specific tasks for end users.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Application
	:twitter:description: Application: An application is a software program designed to perform specific tasks for end users
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Application
	:og:type: article
	:og:description: An application is a software program designed to perform specific tasks for end users
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/application.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Application","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 21 May 2026 14:38:10 +0000","dateModified":"Thu, 21 May 2026 14:38:10 +0000","description":"An application is a software program designed to perform specific tasks for end users","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Application.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Application
-----------

An application is a software program designed to perform specific tasks for end users. PHP applications can take many forms: web applications served over HTTP, command-line tools, background daemons, REST APIs, batch-processing scripts, etc.

PHP applications are typically structured around a framework or architecture pattern, like MVC, ADR, hexagonal architecture, etc. and a dependency-injection container. The entry point is usually a single ``index.php`` for web apps, or a CLI script invoked via the shell.

PHP applications excel at connecting to various sources of informations, to collect, process and store data.

.. code-block:: php
   
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


`Documentation <https://en.wikipedia.org/wiki/Application_software>`__

See also `PHP: Namespaces and autoloading <https://www.php.net/manual/en/language.namespaces.php>`_, `PHP-FIG: PSR standards <https://www.php-fig.org/psr/>`_ and `The Twelve-Factor App <https://12factor.net/>`_.

Related : :ref:`Terminal User Interface (TUI) <tui>`, :ref:`Command Line Interface (CLI) <cli>`, :ref:`Desktop Application <desktop-app>`, :ref:`Mobile Application <mobile-app>`, :ref:`Web Application <web-app>`, :ref:`Model - View - Controller (MVC) <mvc>`, :ref:`Architectural Decision Record (ADR) <adr>`, :ref:`REST API <rest-api>`, :ref:`Application Programming Interface (API) <api>`, :ref:`GraphQL <graphql>`, :ref:`gRPC (Google Remote Procedure Call) <grpc>`, :ref:`Software-as-a-Service (SAAS) <saas>`, :ref:`PaaS <paas>`, :ref:`IaaS <iaas>`, :ref:`Microservice <microservice>`, :ref:`Monolith <monolith>`, :ref:`Single Page Application (SPA) <spa>`, :ref:`Content Management System (CMS) <cms>`, :ref:`NativePHP <nativephp>`, :ref:`Hexagonal Architecture <hexagonal>`, :ref:`Clean Architecture <clean-architecture>`
