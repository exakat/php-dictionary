.. _arrow-function:
.. _fn:
.. meta::
	:description:
		Arrow Functions: Arrow functions are a type of closure with a specific syntax.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Arrow Functions
	:twitter:description: Arrow Functions: Arrow functions are a type of closure with a specific syntax
	:twitter:creator: @exakat
	:og:title: Arrow Functions
	:og:type: article
	:og:description: Arrow functions are a type of closure with a specific syntax
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/arrow-function.ini.html
	:og:locale: en


Arrow Functions
---------------

Arrow functions are a type of closure with a specific syntax. It only accepts one expression, and automatically imports all the variables from the local context of definition. 

Arrow functions may also be marked as ``static``, to prevent this import.

.. code-block:: php
   
   <?php
   
   $b = 10;
   $fn = fn($a) => $a + $b + 2;
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arrow.php>`__

See also `Arrow functions in PHP <https://drops-of-php.hi-folks.dev/04-functions/02-fns-arrowfunction/>`_

Related : :ref:`static <static>`, :ref:`Functions <function>`, :ref:`Closure <closure>`, :ref:`Anonymous Function <anonymous-function>`, :ref:`First Class Callable <first-class-callable>`, :ref:`Anonymous Function <anonymous-function>`, :ref:`Callables <callable>`, :ref:`Callbacks <callback>`

Added in PHP 7.4
