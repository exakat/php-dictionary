.. _error-handling:
.. meta::
	:description:
		Error Handling: Error handling is a broad concept that covers the different ways that PHP use to signal than an error occurred.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Error Handling
	:twitter:description: Error Handling: Error handling is a broad concept that covers the different ways that PHP use to signal than an error occurred
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Error Handling
	:og:type: article
	:og:description: Error handling is a broad concept that covers the different ways that PHP use to signal than an error occurred
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/error-handling.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Error Handling","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 12:54:19 +0000","dateModified":"Mon, 26 Jan 2026 12:54:19 +0000","description":"Error handling is a broad concept that covers the different ways that PHP use to signal than an error occurred","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Error Handling.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Error Handling
--------------

Error handling is a broad concept that covers the different ways that PHP use to signal than an error occurred. 

The main systems are the error reporting, and the exceptions. 

The error reporting is often associated with native errors, although it is possible to raise them and handle them with with error-handlers.

The exception system is based on the throw, try and catch keywords.

.. code-block:: php
   
   <?php
   
   trigger_error('Cannot do this', E_USER_ERROR);
   
   try {
   	throw new Exception('Cannot do this');
   } catch (Exception $e) {
   	print $e->getMessage();
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/ref.errorfunc.php>`__

See also https://roman-huliak.medium.com/php-error-handling-and-exceptions-best-practices-for-robust-applications-c02cf5e225f7

Related : :ref:`Exception <exception>`, 
