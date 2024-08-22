.. _short-syntax:

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
