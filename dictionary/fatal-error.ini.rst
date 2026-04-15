.. _fatal-error:
.. meta::
	:description:
		Fatal Error: Fatal error is a type of PHP error, which ends the execution of the application.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Fatal Error
	:twitter:description: Fatal Error: Fatal error is a type of PHP error, which ends the execution of the application
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Fatal Error
	:og:type: article
	:og:description: Fatal error is a type of PHP error, which ends the execution of the application
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fatal-error.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Fatal Error","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"Fatal error is a type of PHP error, which ends the execution of the application","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Fatal Error.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Fatal Error
-----------

Fatal error is a type of PHP error, which ends the execution of the application. Fatal errors may be caught before ending the execution with a ``catch`` clause on ``Error``.

.. code-block:: php
   
   <?php
   
       try {
           1 + [];
       } catch (Error $e) {
           print A fatal error was caught.;
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.errors.php7.php>`__

See also https://trunc.org/learning/php-fatal-errors
