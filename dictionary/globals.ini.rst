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
