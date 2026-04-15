.. _$http_response_header:
.. meta::
	:description:
		$http_response_header: ``$http_response_header`` contains the list of HTTP headers, as returned after a remote URI call, with ``fopen()`` or ``file_get_contents()``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $http_response_header
	:twitter:description: $http_response_header: ``$http_response_header`` contains the list of HTTP headers, as returned after a remote URI call, with ``fopen()`` or ``file_get_contents()``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: $http_response_header
	:og:type: article
	:og:description: ``$http_response_header`` contains the list of HTTP headers, as returned after a remote URI call, with ``fopen()`` or ``file_get_contents()``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/$http_response_header.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"$http_response_header","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"``$http_response_header`` contains the list of HTTP headers, as returned after a remote URI call, with ``fopen()`` or ``file_get_contents()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/$http_response_header.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


$http_response_header
---------------------

``$http_response_header`` contains the list of HTTP headers, as returned after a remote URI call, with ``fopen()`` or ``file_get_contents()``. It is the same as the result of the function ``get_headers()``.

In general, ``error_get_last()`` should be used instead of ``$php_errormsg``, although this function returns an array, not a string.

This feature is deprecated since PHP 8.5.

.. code-block:: php
   
   <?php
   
       // Example extracted from the manual
       function get_contents() {
           file_get_contents('http://example.com');
           var_dump($http_response_header); // variable is populated in the local scope
       }
   
       get_contents();
       var_dump($http_response_header); // a call to get_contents() does not populate the variable outside the function scope
       
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.httpresponseheader.php>`__

See also https://www.tutorialspoint.com/article/php-http-response-header

Related : , :ref:`file_get_contents() <file_get_contents>`

Removed in PHP 
