.. _const:

Const
-----

``const`` is a PHP keyword, that introduces constant definitions. 

``const`` is allowed inside classes, interfaces, enumerations and traits, to create static constants. ``const`` is also allowed in the global scope, to create global constants. 

``const`` is only allowed in the body of a classes, interfaces, enumerations and traits, and the first level of a main file. It is not possible to create conditioned constants with a if-then structure and const : this requires an include. 


.. code-block:: php
   
   <?php if ($a == 5): ?>
   A is equal to 5
   <?php endif; ?>
   


`Documentation <https://www.php.net/manual/en/control-structures.alternative-syntax.php>`__

Related : :ref:`Classes <class>`, :ref:`Traits <trait>`, :ref:`define() <define>`, :ref:`Conditioned Structures <conditioned>`, :ref:`Static Constant <static-constant>`, :ref:`include <include>`
