.. _php-constant:
.. meta::
	:description:
		PHP Constants: PHP provides a set of predefined global constants.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP Constants
	:twitter:description: PHP Constants: PHP provides a set of predefined global constants
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PHP Constants
	:og:type: article
	:og:description: PHP provides a set of predefined global constants
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/php-constant.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"PHP Constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 17 Sep 2025 16:49:28 +0000","dateModified":"Wed, 17 Sep 2025 16:49:28 +0000","description":"PHP provides a set of predefined global constants","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PHP Constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


PHP Constants
-------------

PHP provides a set of predefined global constants. 

The set of predefined variables changes with PHP versions: for example, in PHP 8.0, ``T_READONLY`` was not defined, and appeared in PHP 8.1. 

It is possible to list all available PHP native constants with the function ``get_declared_constants()``.


.. code-block:: php
   
   <?php
   
   print E_ALL;
   
   print PHP_VERSION;
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.php>`__

Related : :ref:`Superglobal Variables <super-global>`, :ref:`Variables <variable>`, :ref:`Native <native>`
