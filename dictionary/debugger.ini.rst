.. _debugger:
.. _debug:
.. meta::
	:description:
		Debugger: A debugger is an extension or an external program that is used to help when searching for bugs in PHP code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Debugger
	:twitter:description: Debugger: A debugger is an extension or an external program that is used to help when searching for bugs in PHP code
	:twitter:creator: @exakat
	:og:title: Debugger
	:og:type: article
	:og:description: A debugger is an extension or an external program that is used to help when searching for bugs in PHP code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/debugger.ini.html
	:og:locale: en


Debugger
--------

A debugger is an extension or an external program that is used to help when searching for bugs in PHP code. 

There are several debuggers in PHP : Interactive PHP Debugger, xdebug, kint, krumo, whoops, PHP. 

Debugging include executing the code step by step, displaying and modifying the content of variables. 


.. code-block:: php
   
   
   <?php
   	// simple debug system with native PHP print_r
   	print_r($_GET);
   ?>
   


See also `Xdebug <https://www.xdebug.org/>`_, `Interactive PHP Debugger <https://www.php.net/manual/en/book.phpdbg.php>`_, `Kint <https://github.com/kint-php/kint>`_, `Whoops <https://github.com/filp/whoops>`_, `Krumo <http://krumo.kaloyan.info/>`_
