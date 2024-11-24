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

Related : :ref:`Disjunctive Normal Form (DNF) <dnf-type>`, :ref:`False <false>`, :ref:`Mixed <mixed>`, :ref:`Never Type <never>`, :ref:`Nullable <nullable>`, :ref:`Object <object>`, :ref:`Properties <property>`, :ref:`Return Type <return-type>`, :ref:`strict_types <strict_types>`, :ref:`True <true>`, :ref:`Property Type Declaration <type-declaration-property>`, :ref:`Typed Property <typed-property>`

Added in PHP 7.0
