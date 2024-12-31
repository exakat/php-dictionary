.. _variable:
.. meta::
	:description:
		Variables: Variables are used to store and manipulate data.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Variables
	:twitter:description: Variables: Variables are used to store and manipulate data
	:twitter:creator: @exakat
	:og:title: Variables
	:og:type: article
	:og:description: Variables are used to store and manipulate data
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/variable.ini.html
	:og:locale: en


Variables
---------

Variables are used to store and manipulate data. They are containers that hold values, such as numbers, strings, arrays, objects, and more. Variables are an essential component of programming, allowing to store and retrieve information as needed throughout the code. 

Variables in PHP must start with a dollar sign ``$`` followed by the variable name. The name should begin with a letter or an underscore and can contain letters, numbers, and underscores. PHP variable names are case-sensitive.

PHP is a loosely typed language, which means you don't need to explicitly declare the type of a variable. PHP determines the variable's type based on the assigned value. 



.. code-block:: php
   
   <?php
   
   $a = 'a';
   // more calculations
   echo a;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.variables.php>`__

Related : :ref:`Static Variables <static-variable>`, :ref:`Variable Variables <variable-variable>`, :ref:`Type System <type>`, :ref:`Naming <naming>`, :ref:`Interpolation <interpolation>`, :ref:`Dynamic Variable <dynamic-variable>`, :ref:`Global Variables <global-variable>`, :ref:`global Scope <global>`, :ref:`$GLOBALS <globals>`, :ref:`PHP Variables <php-variable>`, :ref:`Pseudo-variable <pseudo-variable>`, :ref:`References <reference>`, :ref:`static <static>`, :ref:`Superglobal Variables <superglobal>`, :ref:`Type System <typehint>`, :ref:`unset() <unset>`
