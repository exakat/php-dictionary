.. _type:
.. _typehint:

Type System
-----------

Type declarations can be added to function arguments, return values, and, as of PHP 7.4.0, class properties. They ensure that the value is of the specified type at call time, otherwise a TypeError is thrown. 

.. code-block:: php
   
   <?php
   
   function foo(A $a) : void {}
   
   class x {
       private A $p;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.declarations.php>`__

See also `Explore Your Types <https://backendtea.com/post/explore-your-types/>`_, `Narrowing types for static analysis <https://seld.be/notes/narrowing-types-for-static-analysis/>`_

Related : :ref:`Scalar Types <scalar-type>`, :ref:`Union Type <union-type>`, :ref:`Intersection Type <intersection-type>`, :ref:`Special Types <special-typehint>`, :ref:`Disjunctive Normal Form (DNF) <dnf>`, :ref:`Variables <variable>`

Added in PHP 7.0
