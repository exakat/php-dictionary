.. _type-contravariance:
.. _contravariance:

Contravariance
--------------

Contravariance allows a parameter type to be less specific in a child method, than that of its parent. 

This means that a parameter ``$param``` in the method ``foo`` of the child class ``X`` can be a parent of the type in the method ``foo`` of the parent class. 

Less specific types can be : the same type ``W``, a parent class of the ``W`` type (here ``V``), an interface implemented by the type ``W``, a union type, such as ``W|string``. In particular, the type may become nullable. 

It cannot be a totally different type, an intersectional type, such as ``W&A``, a different class that implements the same interfac than ``W``, or a different scalar type. 

.. code-block:: php
   
   <?php
   
   class V {}
   
   class W extends V {
       // This method accepts an object compatible with w, but less specific
       function foo(W $param) { }
   }
   
   class X extends W {
       function foo(V $param) { }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.variance.php>`__

Related : :ref:`Covariance <type-covariance>`, :ref:`Nullable <nullable>`, :ref:`Intersection Type <intersectional>`, :ref:`Union Type <union>`, :ref:`Scalar Types <scalar>`

Added in PHP 7.4+
