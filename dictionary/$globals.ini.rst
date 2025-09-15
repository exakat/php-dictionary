.. _$globals:
.. meta::
	:description:
		$GLOBALS: This super-global is a PHP predefined variable, which holds a reference to every global variable in the application.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $GLOBALS
	:twitter:description: $GLOBALS: This super-global is a PHP predefined variable, which holds a reference to every global variable in the application
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: $GLOBALS
	:og:type: article
	:og:description: This super-global is a PHP predefined variable, which holds a reference to every global variable in the application
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/$globals.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"$GLOBALS","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 06 Aug 2025 16:14:24 +0000","dateModified":"Wed, 06 Aug 2025 16:14:24 +0000","description":"This super-global is a PHP predefined variable, which holds a reference to every global variable in the application","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/$GLOBALS.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


$GLOBALS
--------

This super-global is a PHP predefined variable, which holds a reference to every global variable in the application.

.. code-block:: php
   
   <?php
   
   // implicit global variable
   $aGlobalVariable = 1; 
   
   function foo() {
       echo $GLOBALS['aGlobalVariable'];
       $GLOBALS['aGlobalVariable'] = 2;
   }
   
   foo(); // displays 1
   echo aGlobalVariable; // 2
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.globals.php>`__
