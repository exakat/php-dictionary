.. _request:
.. _http-request:
.. _server-request:
.. meta::
	:description:
		Request: A request is an object that encapsulates an incoming HTTP message: method, URL, headers, query parameters, body, and uploaded files.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Request
	:twitter:description: Request: A request is an object that encapsulates an incoming HTTP message: method, URL, headers, query parameters, body, and uploaded files
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Request
	:og:type: article
	:og:description: A request is an object that encapsulates an incoming HTTP message: method, URL, headers, query parameters, body, and uploaded files
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/request.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/request.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/request.ini.html","name":"Request","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:43:55 +0000","dateModified":"Mon, 13 Jul 2026 18:43:55 +0000","description":"A request is an object that encapsulates an incoming HTTP message: method, URL, headers, query parameters, body, and uploaded files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Request.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Request
-------

A request is an object that encapsulates an incoming HTTP message: method, URL, headers, query parameters, body, and uploaded files.

PHP frameworks provide a dedicated Request object that replaces direct access to superglobals such as ``$_GET``, ``$_POST``, ``$_SERVER``, and ``$_FILES``. This makes code more testable and explicit.

PSR-7 defines a standard ``ServerRequestInterface`` that many frameworks and libraries implement, enabling interoperability.

.. code-block:: php
   
   <?php
   
   // PSR-7 style
   use Psr\Http\Message\ServerRequestInterface;
   
   function handle(ServerRequestInterface $request): void {
       $method = $request->getMethod();           // 'POST'
       $query  = $request->getQueryParams();      // $_GET equivalent
       $body   = $request->getParsedBody();       // $_POST equivalent
       $header = $request->getHeaderLine('Accept');
   }
   
   // Laravel / Symfony style
   use Illuminate\Http\Request;
   
   class UserController {
       public function store(Request $request): Response {
           $name  = $request->input('name');
           $email = $request->input('email');
       }
   }
   
   ?>


`Documentation <https://www.php-fig.org/psr/psr-7/>`__

See also `Symfony HttpFoundation Request <https://symfony.com/doc/current/components/http_foundation.html>`_ and `Laravel Requests <https://laravel.com/docs/12.x/requests>`_.

Related : :ref:`$_REQUEST <$_request>`, :ref:`$_GET <$_get>`, :ref:`$_POST <$_post>`, :ref:`$_SERVER <$_server>`, :ref:`Controller <controller>`, :ref:`Route <route>`, :ref:`Middleware Pattern <middleware>`, :ref:`Incoming Data <incoming-data>`, :ref:`Form <form>`

Related packages : `psr/http-message <https://packagist.org/packages/psr/http-message>`_, `nyholm/psr7 <https://packagist.org/packages/nyholm/psr7>`_
