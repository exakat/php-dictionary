.. _default-parameter:

Default Parameter
-----------------

Methods may define a default value for parameters. That way the parameter may be omitted during the call, and this value will be used. 

The default value may be a static expression, and, since PHP 8.1, also include new expression. 

The default parameter must be the last of the parameters : adding a parameter without default value after one will yield an error and mess up the call parameters.


.. code-block:: php
   
   <?php
   
   function makeCodffe($type = 'latte') {
       return "Making a cup of $latte";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arguments.php#functions.arguments.default>`__

Related : :ref:`Functions <function>`, :ref:`Method <method>`
