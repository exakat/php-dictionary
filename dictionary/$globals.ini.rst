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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"$GLOBALS","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 15:08:57 +0000","dateModified":"Sat, 11 Jul 2026 15:08:57 +0000","description":"This super-global is a PHP predefined variable, which holds a reference to every global variable in the application","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/$GLOBALS.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


$GLOBALS
--------

This super-global is a PHP predefined variable, which holds a reference to every global variable in the application. It behaves as an associative array, where each key is the name of a global variable and each value is a reference to that variable, so reading or writing ``$GLOBALS['x']`` inside a function is equivalent to declaring ``global $x;`` first. Because it bypasses normal variable scoping, relying on ``$GLOBALS`` makes code harder to test and reason about, and it is generally considered a code smell in modern PHP, where dependency injection or object properties are preferred. Since PHP 8.1, some indirect writes to ``$GLOBALS`` -- through list assignment, by-reference ``foreach``, or array functions -- are restricted, since they no longer directly modify the underlying global variable.

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

See also `PHP 8.1: $GLOBALS variable restrictions <https://php.watch/versions/8.1/GLOBALS-restrictions>`_ and `Understanding PHP Globals and Variable Scope in WordPress <https://wpshout.com/php-globals-variable-scope-wordpress/#gref>`_.

Related : :ref:`$_ENV <$_env>`, :ref:`$_SERVER <$_server>`, :ref:`$argv <$argv>`, :ref:`$php_errormsg <$php_errormsg>`, :ref:`Global Variables <global-variable>`
