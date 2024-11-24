.. _as:

As
--

The as operator has several usage:

+ It is a compulsory keyword with the foreach() control structure
+ It is an optional keyword with the use expression, in trait import
+ It is an optional keyword with the use expression, in namespace import

The ``as`` operator often works to give a distinct name to an existing structure. 



.. code-block:: php
   
   <?php
   
   use stdClass as StandardClass;
   
   foreach($map as $key => $value) {
   	print "$key => $value\n";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.assignment.php>`__

Related : :ref:`Foreach <foreach>`, :ref:`Use Alias <use-alias>`, :ref:`Alias <alias>`
