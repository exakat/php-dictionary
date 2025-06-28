.. _warning:
.. meta::
	:description:
		Warning: A warning is a non-fatal runtime error that alerts developers about a problem in the code, but doesn't stop script execution at that point.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Warning
	:twitter:description: Warning: A warning is a non-fatal runtime error that alerts developers about a problem in the code, but doesn't stop script execution at that point
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Warning
	:og:type: article
	:og:description: A warning is a non-fatal runtime error that alerts developers about a problem in the code, but doesn't stop script execution at that point
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/warning.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Warning","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 28 Jun 2025 14:31:12 +0000","dateModified":"Sat, 28 Jun 2025 14:31:12 +0000","description":"A warning is a non-fatal runtime error that alerts developers about a problem in the code, but doesn't stop script execution at that point","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Warning.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Warning
-------

A warning is a non-fatal runtime error that alerts developers about a problem in the code, but doesn't stop script execution at that point.

Warnings are one of the error reporting levels, between error and notice.


.. code-block:: php
   
   <?php
   
   include 'unknown-file.php'; // Warning, failed to open stream unknown-file.php
   
   ?>


`Documentation <https://www.php.net/manual/en/errorfunc.constants.php>`__

Related : :ref:`Error <error>`, :ref:`Notice <notice>`, :ref:`Error Reporting <error-reporting>`
