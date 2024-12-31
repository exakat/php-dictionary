.. _variable-variable:
.. meta::
	:description:
		Variable Variables: Variable variables refer to a feature that allows to use the value of a variable as the name of another variable.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Variable Variables
	:twitter:description: Variable Variables: Variable variables refer to a feature that allows to use the value of a variable as the name of another variable
	:twitter:creator: @exakat
	:og:title: Variable Variables
	:og:type: article
	:og:description: Variable variables refer to a feature that allows to use the value of a variable as the name of another variable
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/variable-variable.ini.html
	:og:locale: en


Variable Variables
------------------

Variable variables refer to a feature that allows to use the value of a variable as the name of another variable. It provides a way to dynamically create and access variables based on runtime values.

Variable variables are denoted by the double dollar sign ``$$`` followed by the name of the variable stored in another variable. More dollar signs may be compounded, though it is rare.


.. code-block:: php
   
   <?php
   
   $a = 'b';
   $b = 'c';
   
   echo $$b;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.variables.variable.php>`__

See also `The Dangers of PHP's $$ <https://andy-carter.com/blog/the-dangers-of-php-variable-variables>`_

Related : :ref:`Variables <variable>`, :ref:`Static Variables <static-variable>`, :ref:`compact() <compact>`, :ref:`extract() <extract>`, :ref:`Global Variables <global-variable>`, :ref:`global Scope <global>`, :ref:`$GLOBALS <globals>`, :ref:`$GLOBALS <$_globals>`, :ref:`Superglobal Variables <superglobal>`, :ref:`Superglobal Variables <super-global>`
