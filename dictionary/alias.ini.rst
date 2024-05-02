.. _alias:

Alias
-----

An alias is a distinct name for an existing named structure. It is a classic way to cope with possible naming conflict, and improve readability. 

For example, there are aliases in namespaces import, to disambiguate classes, traits, interfaces, enums, functions and constants from other namespaces. There is also the class_alias() function, which allows the application-wide creation of aliases. 

There are also aliases for methods, when importing them from a trait. 

References are also considered an alias, as they stand for a variable with another name. 



.. code-block:: php
   
   <?php
   
   use stdClass as StandardClass;
   
   foreach($map as $key => $value) {
   	print "$key => $value\n";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.assignment.php>`__

Related : :ref:`Use Alias <use-alias>`, :ref:`Alias Types <type-alias>`, :ref:`Insteadof <insteadof>`, :ref:`References <reference>`
