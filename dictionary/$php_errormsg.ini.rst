.. _$php_errormsg:
.. meta::
	:description:
		$php_errormsg: ``$php_errormsg`` contains the last error message, emitted by PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $php_errormsg
	:twitter:description: $php_errormsg: ``$php_errormsg`` contains the last error message, emitted by PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: $php_errormsg
	:og:type: article
	:og:description: ``$php_errormsg`` contains the last error message, emitted by PHP
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/$php_errormsg.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"$php_errormsg","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"``$php_errormsg`` contains the last error message, emitted by PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/$php_errormsg.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


$php_errormsg
-------------

``$php_errormsg`` contains the last error message, emitted by PHP. 

In general, ``error_get_last()`` should be used instead of ``$php_errormsg``, although this function returns an array, not a string.

This feature was removed in PHP 8.0.


.. code-block:: php
   
   <?php
   
   // Warning: Undefined variable $php_errormsg 
   // in PHP 8.0 (sic)
   echo $php_errormsg;
   
   print_r(error_get_last());
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.phperrormsg.php>`__

Removed in PHP 
