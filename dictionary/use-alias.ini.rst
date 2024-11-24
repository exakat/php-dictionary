.. _use-alias:

Use Alias
---------

The use operator can create aliases for a class, function or constant. After the declaration of the alias, it is possible to use the original class with the alias name. 


.. code-block:: php
   
   <?php
   
   use A as B;
   
   class A {}
   
   new A;
   new B;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.importing.php>`__
