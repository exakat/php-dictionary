.. _type-covariance:
.. _covariance:

Covariance
----------

Covariance allows a child's method to return a more specific type than the return type of its parent's method.

This means that the type of the return value in the method ``foo`` of the child class ``X`` can be a child of the type of the return value in the method ``foo`` of the parent class ``W``. 

Less specific types can be : the same type ``W``, a child class of the ``W`` type (here ``X``), an intersectional type, such as ``W&Z``. In particular, the type may not become nullable. 

It cannot be a totally different type, an union type, such as ``W|A``, any class that implements the same interfaces than ``W``, or a different scalar type. 


.. code-block:: php
   
   <?php
   
   class V {}
   
   class W extends V {
       function foo() : W { }
   }
   
   class X extends W {
       // This method returns an object compatible with w, but more specific
       function foo() : X { }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.variance.php>`__

See also `Type variance in PHP <https://www.npopov.com/2021/11/08/Type-variance-in-PHP.html>`_

Related : :ref:`Contravariance <type-contravariance>`

Added in PHP 7.4+
