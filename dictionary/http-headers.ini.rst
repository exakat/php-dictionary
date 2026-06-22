.. _http-headers:
.. meta::
	:description:
		HTTP Request Headers: HTTP request headers are sent by the client to the server at the start of an HTTP request.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: HTTP Request Headers
	:twitter:description: HTTP Request Headers: HTTP request headers are sent by the client to the server at the start of an HTTP request
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: HTTP Request Headers
	:og:type: article
	:og:description: HTTP request headers are sent by the client to the server at the start of an HTTP request
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/http-headers.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"HTTP Request Headers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 17 Jun 2026 16:10:16 +0000","dateModified":"Wed, 17 Jun 2026 16:10:16 +0000","description":"HTTP request headers are sent by the client to the server at the start of an HTTP request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/HTTP Request Headers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


HTTP Request Headers
--------------------

HTTP request headers are sent by the client to the server at the start of an HTTP request. They carry metadata about the client, the requested resource, and the desired response format.

Request headers are available in the ``$_SERVER`` superglobal with the ``HTTP_`` prefix, e.g., ``$_SERVER['HTTP_ACCEPT']``, or through ``getallheaders()`` for the full list.

Common request headers include ``Accept``, ``Authorization``, ``Content-Type``, ``User-Agent``, and ``Cookie``.

.. code-block:: php
   
   <?php
   
   // Read a specific request header
   $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';
   
   // Read all request headers
   $requestHeaders = getallheaders();
   
   foreach ($requestHeaders as $name => $value) {
       echo "$name: $value", PHP_EOL;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/function.getallheaders.php>`__

Related : :ref:`HTTP Headers <http-header>`, :ref:`Hyper Text Transfer Protocol (HTTP) <http>`, :ref:`Headers <headers>`, :ref:`$_SERVER <$_server>`, :ref:`HTTP Code <http-code>`, :ref:`Redirect <redirect>`, :ref:`Search Engine Optimization (SEO) <seo>`
