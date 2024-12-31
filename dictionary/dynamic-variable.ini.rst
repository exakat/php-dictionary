.. _dynamic-variable:
.. meta::
	:description:
		Dynamic Variable: A dynamic variable is a variable whose name stored in a variable or an expression.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dynamic Variable
	:twitter:description: Dynamic Variable: A dynamic variable is a variable whose name stored in a variable or an expression
	:twitter:creator: @exakat
	:og:title: Dynamic Variable
	:og:type: article
	:og:description: A dynamic variable is a variable whose name stored in a variable or an expression
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dynamic-variable.ini.html
	:og:locale: en


Dynamic Variable
----------------

A dynamic variable is a variable whose name stored in a variable or an expression. 

They are identified by a double $ sign, though the same operator may be used multiple times. 

They are also called variable variable. 

.. code-block:: php
   
   
   <?php
   
   $a = 'b';
   $b = 'c';
   $c = 'd';
   
   echo $$$a; 
   echo $$b; 
   echo $c; 
   
   ?>
   


`Documentation <https://www.php.net/manual/en/language.variables.variable.php>`__

See also `The Dangers of PHP's $$ <https://andy-carter.com/blog/the-dangers-of-php-variable-variables>`_

Related : :ref:`Variables <variable>`
