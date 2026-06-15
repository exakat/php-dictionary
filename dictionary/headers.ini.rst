.. _headers:
.. meta::
	:description:
		Headers: In PHP, headers are HTTP response headers sent to the client before any body output.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Headers
	:twitter:description: Headers: In PHP, headers are HTTP response headers sent to the client before any body output
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Headers
	:og:type: article
	:og:description: In PHP, headers are HTTP response headers sent to the client before any body output
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/headers.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Headers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"In PHP, headers are HTTP response headers sent to the client before any body output","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Headers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Headers
-------

In PHP, headers are HTTP response headers sent to the client before any body output. PHP provides several built-in functions to manage them.

``header()`` sends a raw HTTP header. ``headers_sent()`` checks whether headers have already been sent. ``headers_list()`` returns the list of headers ready to be sent. ``header_remove()`` removes a previously set header.

Headers must be sent before any output (HTML, whitespace, or ``echo``). Sending output before calling ``header()`` triggers a PHP warning.

.. code-block:: php
   
   <?php
   
   header('Content-Type: application/json');
   header('X-Custom-Header: value');
   
   if (headers_sent($file, $line)) {
       echo "Headers already sent in $file on line $line";
   }
   
   echo json_encode(['status' => 'ok']);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.header.php>`__

Related : :ref:`HTTP Headers <http-header>`, :ref:`Hyper Text Transfer Protocol (HTTP) <http>`, :ref:`Cookie <cookie>`, :ref:`HTTP Request Headers <http-headers>`, :ref:`Output buffering <output-buffering>`
