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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Application","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 21 May 2026 09:23:55 +0000","dateModified":"Thu, 21 May 2026 09:23:55 +0000","description":"An application is a software program designed to perform specific tasks for end users","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Application.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Application
-----------

An application is a software program designed to perform specific tasks for end users. In PHP, applications can take many forms: web applications served over HTTP, command-line tools, background daemons, REST APIs, or batch-processing scripts.

PHP applications are typically structured around a framework or architecture pattern (MVC, ADR, hexagonal, etc.) and a dependency-injection container. The entry point is usually a single ``index.php`` for web apps, or a CLI script invoked via the shell.

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

Related : , :ref:`Command Line Interface (CLI) <cli>`, , , 

Related packages : `slim/slim <https://packagist.org/packages/slim/slim>`_, `symfony/framework-bundle <https://packagist.org/packages/symfony/framework-bundle>`_
