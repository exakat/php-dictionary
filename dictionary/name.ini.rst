.. _name:

Name
----

A name is a generic coding concept : it is a short and human handle to designate a larger or variable structure. 

In PHP, it is possible to give names to many things : variables, constants, functions, classes, interfaces, traits, enumerations, methods, properties, goto labels. Most of these have also an anonymous version, where the same structure may be created without a name. 

Names usually require to be unique within a piece of code: this is the case for structures which have a definition, such as a class or a function. To avoid such conflict, it is recommended to use namespaces. 


.. code-block:: php
   
   
   <?php
   
   // here, foo is the name of a function
   function foo() {}
   
   // the name is used to call the function
   foo();
   
   ?>
   


Related : :ref:`Namespaces <namespace>`, :ref:`Anonymous <anonymous>`
