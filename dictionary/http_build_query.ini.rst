.. _http_build_query:
.. meta::
	:description:
		http_build_query(): The http_build_query() function in PHP is used to generate a URL-encoded query string from an associative array (or object).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: http_build_query()
	:twitter:description: http_build_query(): The http_build_query() function in PHP is used to generate a URL-encoded query string from an associative array (or object)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: http_build_query()
	:og:type: article
	:og:description: The http_build_query() function in PHP is used to generate a URL-encoded query string from an associative array (or object)
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/http_build_query.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"http_build_query()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 24 Jun 2025 19:58:08 +0000","dateModified":"Tue, 24 Jun 2025 19:58:08 +0000","description":"The http_build_query() function in PHP is used to generate a URL-encoded query string from an associative array (or object)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/http_build_query().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


http_build_query()
------------------

The http_build_query() function in PHP is used to generate a URL-encoded query string from an associative array (or object). This is commonly used to build query strings for HTTP GET requests or for use in URLs.

http_build_query() converts automatically backed enumerations to their type value (integer or string), when they are used as values in the array. This is a PHP 8.4 feature.

http_build_query() provides arguments to deal with numeric keys (a prefix may be added), with custom separators and encoding type. 

The reverse function for http_build_query() is parse_str(), which converts a query string into an array.

.. code-block:: php
   
   <?php
   
   enum A: int {
       case A = 1;
   }
   
   print http_build_query(['x' => A::A, 'b' => 3]);
   //    x=1&b=3
   
   ?>


`Documentation <https://www.php.net/manual/en/function.http-build-query.php>`__

Related : :ref:`Enumeration (enum) <enum>`, :ref:`Backed Enum <backed-enum>`, :ref:`parse_str() <parse_str>`
