.. _define:
.. meta::
	:description:
		define(): define() is a PHP function, that introduces constant definitions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: define()
	:twitter:description: define(): define() is a PHP function, that introduces constant definitions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: define()
	:og:type: article
	:og:description: define() is a PHP function, that introduces constant definitions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/define.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"define()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jan 2025 12:52:58 +0000","dateModified":"Tue, 14 Jan 2025 12:52:58 +0000","description":"define() is a PHP function, that introduces constant definitions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/define().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


define()
--------

define() is a PHP function, that introduces constant definitions. 

define() is a function, and may be called anywhere. It is slower than `const`, as it is only executed at runtime. define() doesn't allow class constants creation.

define() used to create case-insensitive constant, but this was abandoned in PHP 7.3.



.. code-block:: php
   
   
   <?php
       define('HELLO', 'Hello');
       
       print HELLO . " world\n";
   ?>
   


`Documentation <https://www.php.net/manual/en/control-structures.alternative-syntax.php>`__
