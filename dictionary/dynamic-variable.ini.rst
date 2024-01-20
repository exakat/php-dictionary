.. _dynamic-variable:

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
