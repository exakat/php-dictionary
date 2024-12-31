.. _parameter:
.. meta::
	:description:
		Parameter: A parameter is a variable in a method definition.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Parameter
	:twitter:description: Parameter: A parameter is a variable in a method definition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Parameter
	:og:type: article
	:og:description: A parameter is a variable in a method definition
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/parameter.ini.html
	:og:locale: en


Parameter
---------

A parameter is a variable in a method definition. They have a name, and may have a default value and type. They may also be passed by reference, or by value (by default).

.. code-block:: php
   
   <?php
   
   function foo($parameter) {}
   
   $argument = 1;
   foo($argument);
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arguments.php>`__

Related : :ref:`Argument <argument>`, :ref:`Constant Scalar Expression <static-constant-expression>`
