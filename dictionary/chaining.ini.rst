.. _chaining:

Chaining
--------

Chaining refers to the practice to link several elements one to each other. 

In PHP, there are two chaining : exception and method call. 

Exception chaining happens when an exception is created, while including a previous exception. This is convenient to provide all information in the end.

Method chaining happens when the result of a method call is used to call another method. This is common with fluent interfaces. Sometimes, properties may be part of such a chain.

.. code-block:: php
   
   <?php
   
   try {
   	doSomething();
   } catch (Exception $e) {
   	throw new exception('new error', 0, $e);
   }
   
   $object->m1()->m2($b)->m3();
   
   
   ?>


Related : :ref:`Fluent Interface <fluent-interface>`, :ref:`Exception <exception>`, 
