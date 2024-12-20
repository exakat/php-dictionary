.. _fully-qualified-name:
.. _fqn:
.. _fqcn:
.. _absolute-name:

Fully Qualified Name
--------------------

A fully qualified name, or a fully qualified class name, is a unique identifier for the PHP name of a constant, class, trait, interface, enum or function : it includes its namespace name.

PHP names may be fully qualified, unqualified or relative.

.. code-block:: php
   
   <?php
   
   namespace A {
       const B = 1;
       
       function foo() {
           // This is a local name : the namespace A is optional. 
           // The fully qualified name is \A\B;
           echo B;
           
           // This is a fully qualified name
           echo \A\B;
       }
   }
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.rules.php>`__

Related : :ref:`Use <use>`, :ref:`Namespaces <namespace>`, :ref:`Relative Types <relative-types>`

Added in PHP 5.3
