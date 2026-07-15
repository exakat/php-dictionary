.. _uri-class:
.. meta::
	:description:
		URI Class: The ``URI`` class is the class provided by the uri extension.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: URI Class
	:twitter:description: URI Class: The ``URI`` class is the class provided by the uri extension
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: URI Class
	:og:type: article
	:og:description: The ``URI`` class is the class provided by the uri extension
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/uri-class.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/uri-class.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/uri-class.ini.html","name":"URI Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:58 +0000","dateModified":"Fri, 19 Jun 2026 21:24:58 +0000","description":"The ``URI`` class is the class provided by the uri extension","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/URI Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


URI Class
---------

The ``URI`` class is the class provided by the uri extension. It is build with a string, as URL, and parses it in smaller part with its methods.

.. code-block:: php
   
   <?php
   
       use Uri\Rfc3986\Uri;
    
       $url = new Uri('https://www.php.net:443/phpinfo');
   
   ?>


`Documentation <https://www.php.net/manual/en/book.uri.php>`__

See also `PHP 8.5 Introduces a New URI Extension <https://laravel-news.com/php-85-introduces-a-new-uri-extension>`_.

Related : :ref:`Universal Resource Identifier (URI) <uri>`, :ref:`Universal Resource Locator (URL) <url>`, :ref:`URI Extension <uri-extension>`
