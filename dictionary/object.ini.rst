.. _object:

Object
------

PHP includes a complete object model. Some of its features are: visibility, abstract and final classes and methods, additional magic methods, interfaces, and cloning.

`object` is also a PHP type, which represent an object of any class.


.. code-block:: php
   
   <?php
   
   foreach([11,12,13] as $id => $value) {
       print "$id => $value\n";
   }
   
   for ($i = 1; $i <= 10; $i++) {
       echo $i;
   }
   
   $i = 10;
   while ($i <= 10) {
       echo $i++;  
   }
   
   $i = 10;
   do {
       echo $i++;  
   } while ($i <= 10);
   
   $a = new A;
   var_dump($a instanceof object);
   
   ?>
   


`Documentation <https://www.php.net/manual/en/language.oop5.php>`__

See also `TYPE HINT ALL THE THINGS! <https://thecodingmachine.io/type-hint-all-the-things>`_

Related : :ref:`Visibility <visibility>`, :ref:`Abstract Keyword <abstract>`, :ref:`Final Keyword <final>`, :ref:`Magic Methods <magic-method>`, :ref:`Interfaces <interface>`, :ref:`Clone <clone>`, :ref:`Type System <type>`
