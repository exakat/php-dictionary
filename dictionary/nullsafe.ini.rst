.. _nullsafe:

Nullsafe
--------

A nullsafe operator is able to carry a function or fail graciously to `null`. In particular, it won't stop the execution with a fatal error. 

There are two PHP operators that are nullsafe : 

+ nullsafe object operator `?->`
+ nullsafe-coalesce `??`.


.. code-block:: php
   
   <?php
   
   $a = foo();
   
   $b = $a?->method();
   
   $b = $a?->chain1?->chain2?->method();
   
   // foo may return null
   function foo() : ?A { }
   
   ?>
   


Related : :ref:`Object Operator -> <object-operator>`, :ref:`Coalesce Operator <coalesce>`
