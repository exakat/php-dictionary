.. _type-contravariance:
.. _contravariance:

Contravariance
--------------

Contravariance allows a parameter type to be less specific in a child method, than that of its parent. 

.. code-block:: php
   
   <?php
   
   class v {}
   
   class w extends v {
       // This method accepts an object compatible with w, but less specific
       function foo(v $arg) { }
   }
   
   class wv extends w {
       function foo(w $arg) { }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.variance.php>`__

Related : :ref:`Covariance <type-covariance>`

Added in PHP 7.4+
