.. _globals:
.. _$_globals:
.. meta::
	:description:
		$GLOBALS: $GLOBALS is a global variable, that host all other global variables, during a PHP execution.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $GLOBALS
	:twitter:description: $GLOBALS: $GLOBALS is a global variable, that host all other global variables, during a PHP execution
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: $GLOBALS
	:og:type: article
	:og:description: $GLOBALS is a global variable, that host all other global variables, during a PHP execution
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/globals.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"$GLOBALS","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"$GLOBALS is a global variable, that host all other global variables, during a PHP execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/$GLOBALS.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


$GLOBALS
--------

$GLOBALS is a global variable, that host all other global variables, during a PHP execution. It is also a super-global, because it is always available, even without import. 

.. code-block:: php
   
   <?php
   
   global $x;
   $x = 'A';
   
   function counter() {
       echo $GLOBALS['A'];
   }
   
   foo();
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.globals.php>`__

Related : :ref:`Variables <variable>`, :ref:`Static Variables <static-variable>`, :ref:`Variable Variables <variable-variable>`, :ref:`Global Variables <global-variable>`
