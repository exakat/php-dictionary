.. _type-covariance:
.. _covariance:

Covariance
----------

Covariance allows a child's method to return a more specific type than the return type of its parent's method.

.. code-block:: php
   
   <?php
   
   class v {}
   
   class w extends v {
       function foo() : w { }
   }
   
   class wv extends w {
       // This method returns an object compatible with w, but more specific
       function foo() : wv { }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.variance.php>`__

See also `Type variance in PHP <https://www.npopov.com/2021/11/08/Type-variance-in-PHP.html>`_

Related : :ref:`Contravariance <type-contravariance>`

Added in PHP 7.4+
