.. _route:
.. meta::
	:description:
		Route: A route is links an HTTP URL to a request handler.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Route
	:twitter:description: Route: A route is links an HTTP URL to a request handler
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Route
	:og:type: article
	:og:description: A route is links an HTTP URL to a request handler
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/route.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Route","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"A route is links an HTTP URL to a request handler","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Route.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Route
-----

A route is links an HTTP URL to a request handler. 

Routes may be a few, for which a basic system such as a switch is sufficient, to very numerous, where is it handled by a routing system or even the architecture.
 


.. code-block:: php
   
   
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
   


See also `How to create a basic PHP router <https://www.educative.io/answers/how-to-create-a-basic-php-router>`_

Related packages : `nikic/fast-route <https://packagist.org/packages/nikic/fast-route>`_, `symfony/routing <https://packagist.org/packages/symfony/routing>`_, `altorouter/altorouter <https://packagist.org/packages/altorouter/altorouter>`_
