.. _short-syntax:
.. meta::
	:description:
		Short Syntax: A short syntax is the fusion of an operator with the `=` operator.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Short Syntax
	:twitter:description: Short Syntax: A short syntax is the fusion of an operator with the `=` operator
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Short Syntax
	:og:type: article
	:og:description: A short syntax is the fusion of an operator with the `=` operator
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/short-syntax.ini.html
	:og:locale: en


Short Syntax
------------

A short syntax is the fusion of an operator with the `=` operator. That way, the operator is applied to the right hand operand, and the left variable, then, assigned to that variable. 

It is convenient when the variable has to be assigned again to itself.


.. code-block:: php
   
   <?php
   
   $a = 0;
   // Adds 2 to $a
   $a = $a + 2;
   
   // short syntax to add 3 to $a
   $a += 3;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.assignment.php>`__

See also `PHP.INI settings Disable exec, shell_exec, system, popen and Other Functions To Improve Security <https://www.cyberciti.biz/faq/linux-unix-apache-lighttpd-phpini-disable-functions/>`_

Related : :ref:`Assignations <assignation>`, :ref:`Operators <operator>`
