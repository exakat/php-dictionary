.. _slim:
.. _slim-framework:
.. _slim-php:
.. meta::
	:description:
		Slim: Slim is a lightweight PHP micro-framework designed for building APIs and small web applications.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Slim
	:twitter:description: Slim: Slim is a lightweight PHP micro-framework designed for building APIs and small web applications
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Slim
	:og:type: article
	:og:description: Slim is a lightweight PHP micro-framework designed for building APIs and small web applications
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/slim.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/slim.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/slim.ini.html","name":"Slim","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 18:58:02 +0000","dateModified":"Mon, 06 Jul 2026 18:58:02 +0000","description":"Slim is a lightweight PHP micro-framework designed for building APIs and small web applications","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Slim.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Slim
----

Slim is a lightweight PHP micro-framework designed for building APIs and small web applications. It provides routing, middleware support, and PSR-7 request/response handling with minimal overhead.

Slim follows the philosophy of doing less: it ships with no ORM, no templating engine, and no authentication layer. Developers add only the components they need.

In a broader sense, slim is also used informally to describe code or classes that are deliberately minimal and focused on a single task.

.. code-block:: php
   
   <?php
   
       use Slim\Factory\AppFactory;
       use Psr\Http\Message\ResponseInterface as Response;
       use Psr\Http\Message\ServerRequestInterface as Request;
       
       $app = AppFactory::create();
       
       $app->get('/hello/{name}', function (Request $request, Response $response, array $args): Response {
           $response->getBody()->write('Hello, ' . $args['name']);
           return $response;
       });
       
       $app->run();
   
   ?>


`Documentation <https://www.slimframework.com/docs/v4/>`__

Related : :ref:`Thin <thin>`, :ref:`Fat <fat>`, :ref:`Micro-framework <micro-framework>`, :ref:`Request <request>`, :ref:`Middleware Pattern <middleware>`, :ref:`Route <route>`, :ref:`PHP Standards Recommendations (PSR) <psr>`

Related packages : `slim/slim <https://packagist.org/packages/slim/slim>`_
