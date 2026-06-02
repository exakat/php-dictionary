.. _parse_url:
.. meta::
	:description:
		parse_url(): ``parse_url()`` parses a URL string and returns its components as an associative array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: parse_url()
	:twitter:description: parse_url(): ``parse_url()`` parses a URL string and returns its components as an associative array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: parse_url()
	:og:type: article
	:og:description: ``parse_url()`` parses a URL string and returns its components as an associative array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/parse_url.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"parse_url()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 31 May 2026 07:24:40 +0000","dateModified":"Sun, 31 May 2026 07:24:40 +0000","description":"``parse_url()`` parses a URL string and returns its components as an associative array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/parse_url().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


parse_url()
-----------

``parse_url()`` parses a URL string and returns its components as an associative array. The components it extracts are: ``scheme``, ``host``, ``port``, ``user``, ``pass``, ``path``, ``query``, and ``fragment``.

An optional second parameter accepts a ``PHP_URL_*`` constant to return a single component as a string or integer instead of the full array.

``parse_url()`` is deliberately lenient: it does not validate that the URL is well-formed or reachable. It only splits the string according to RFC 3986 syntax. Providing a relative URL or a partial URL will return only the components that are present.

For validation, combine ``parse_url()`` with ``filter_var($url, FILTER_VALIDATE_URL)``. For building URLs, use ``http_build_query()`` for the query string part.

.. code-block:: php
   
   <?php
   
   $url = 'https://user:pass@example.com:8080/path?query=value#section';
   
   $parts = parse_url($url);
   print_r($parts);
   /**
    * [
    *   scheme   => 'https',
    *   host     => 'example.com',
    *   port     => 8080,
    *   user     => 'user',
    *   pass     => 'pass',
    *   path     => '/path',
    *   query    => 'query=value',
    *   fragment => 'section',
    * ]
    */
   
   $host = parse_url($url, PHP_URL_HOST); // 'example.com'
   
   ?>


`Documentation <https://www.php.net/manual/en/function.parse-url.php>`__

See also `RFC 3986 <https://datatracker.ietf.org/doc/html/rfc3986>`_, `Understanding and Implementing PHP's `parse_url()` Function <https://reintech.io/blog/understanding-implementing-php-parse-url-function>`_ and `How to use parse_url() in PHP safely <https://benjamincrozat.com/php-parse-url>`_.

Related : :ref:`Universal Resource Locator (URL) <url>`, :ref:`Hyper Text Transfer Protocol (HTTP) <http>`, :ref:`Parse <parse>`, :ref:`parse_str() <parse_str>`, :ref:`http_build_query() <http_build_query>`, :ref:`Universal Resource Identifier (URI) <uri>`, :ref:`Validation <validation>`
