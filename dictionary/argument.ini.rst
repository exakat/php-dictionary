.. _argument:
.. meta::
	:description:
		Argument: Arguments are values passed to a function or method, at execution time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Argument
	:twitter:description: Argument: Arguments are values passed to a function or method, at execution time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Argument
	:og:type: article
	:og:description: Arguments are values passed to a function or method, at execution time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/argument.ini.html
	:og:locale: en


Argument
--------

Arguments are values passed to a function or method, at execution time. They may be a variable or an expression.

.. code-block:: php
   
   <?php
   
   function foo($parameter) {}
   
   $argument = 1;
   foo($argument + 2);
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arguments.php>`__

Related : :ref:`Parameter <parameter>`
