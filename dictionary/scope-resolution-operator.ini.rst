.. _scope-resolution-operator:
.. _double-colon:
.. _paamayim-nekudotayim:

Scope Resolution Operator ::
----------------------------

The Scope Resolution Operator is a token that allows access to static, constant, and overridden properties or methods of a class.

Traditionally, this used to be a feature of the function get_class(). The operator is more modern and faster. 

This operator is often called double-colon, or ``paamayim-nekudotayim`` : this is double-colon in Hebrew.

.. code-block:: php
   
   <?php
   
   $a = new stdClass();
   
   echo $a::class;
   
   // identical to 
   echo get_class($a);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php>`__

Related : :ref:`Object Operator -> <object-operator>`, :ref:`Object Nullsafe Operator ?-> <object-nullsafe-operator>`
