.. _http-method:
.. _http-verb:
.. _request-method:
.. meta::
	:description:
		HTTP Method: An HTTP method, also called an HTTP verb, defines the intended action of an HTTP request.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: HTTP Method
	:twitter:description: HTTP Method: An HTTP method, also called an HTTP verb, defines the intended action of an HTTP request
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: HTTP Method
	:og:type: article
	:og:description: An HTTP method, also called an HTTP verb, defines the intended action of an HTTP request
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/http-method.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/http-method.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/http-method.ini.html","name":"HTTP Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 07:54:45 +0000","dateModified":"Fri, 03 Jul 2026 07:54:45 +0000","description":"An HTTP method, also called an HTTP verb, defines the intended action of an HTTP request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/HTTP Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


HTTP Method
-----------

An HTTP method, also called an HTTP verb, defines the intended action of an HTTP request. The most common methods are GET, POST, PUT, PATCH, DELETE, HEAD, and OPTIONS.

Methods differ in their safety and idempotency guarantees. A method is safe if it does not modify server state, such as ``GET``, ``HEAD``, ``OPTIONS``. A method is idempotent if repeating it produces the same result as a single call ``GET``, ``HEAD``, ``PUT``, ``DELETE``. ``POST`` and ``PATCH`` are neither safe nor guaranteed idempotent by the specification, which is why APIs that use them for state-changing operations often implement explicit idempotency mechanisms such as idempotency keys.

The request method is available via ``$_SERVER['REQUEST_METHOD']`` or through framework helpers.

.. code-block:: php
   
   <?php
   
       $method = $_SERVER['REQUEST_METHOD']; // GET, POST, PUT, PATCH, DELETE ...
   
   ?>


`Documentation <https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods>`__

See also `RFC 9110 — HTTP Semantics <https://www.rfc-editor.org/rfc/rfc9110#name-methods>`_.

Related : :ref:`Hyper Text Transfer Protocol (HTTP) <http>`, :ref:`REST API <rest-api>`, :ref:`Idempotent <idempotent>`, :ref:`HTTP Headers <http-header>`, :ref:`Request <request>`, :ref:`Response <response>`
