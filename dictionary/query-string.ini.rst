.. _query-string:
.. meta::
	:description:
		Query String: The query string is a part of a URL that contains data and parameters to be passed to a web server.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Query String
	:twitter:description: Query String: The query string is a part of a URL that contains data and parameters to be passed to a web server
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Query String
	:og:type: article
	:og:description: The query string is a part of a URL that contains data and parameters to be passed to a web server
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/query-string.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Query String","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 12:50:23 +0000","dateModified":"Thu, 22 Jan 2026 12:50:23 +0000","description":"The query string is a part of a URL that contains data and parameters to be passed to a web server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Query String.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Query String
------------

The query string is a part of a URL that contains data and parameters to be passed to a web server. It is typically located at the end of a URL and starts with a question mark (?), followed by key-value pairs separated by ampersands (&). 

The values passed in the query string are available in the $_GET superglobal array. The keys of this array correspond to the names of the parameters in the query string, and the values are the corresponding values passed.

.. code-block:: php
   
   <?php
   
   // https://www.example.com/index.php?x=1
   
   print_r($_GET);
   Array(
   	[x] => 1
   )
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Query_string>`__

Related : :ref:`Universal Resource Locator (URL) <url>`, :ref:`$_GET <$_get>`
