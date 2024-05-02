.. _call:

Call
----

A call is the usage action of a definition or declaration. 

For example, a function is declared, then called. Calling an undefined structure is a fatal error.

A definition must happen before a call. The autoload process allows for last minute loading of a class definition. 


.. code-block:: php
   
   <?php
   
   function foo() {} 
   
   // calling a function
   foo();
   
   // calling an undefined function
   goo();
   Fatal error: Uncaught Error: Call to undefined function goo()
   
   
   ?>


Related : :ref:`Definition <definition>`, :ref:`Class Autoloading <autoload>`
