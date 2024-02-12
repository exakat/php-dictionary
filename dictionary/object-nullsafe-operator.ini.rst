.. _object-nullsafe-operator:

Object Nullsafe Operator ?->
----------------------------

The object nullsafe operator is an operator which gives access to properties and methods of an object.

Depending on the context, those properties and methods must be public or protected.

Object Nullsafe Operator is directly related to the Object operator : the difference is that the former keeps on executing when the support object is null, while the second stops with a fatal error.


.. code-block:: php
   
   <?php
   
   $array = ['a' => (new stdClass)->a = 1, ];
   
   // displays 1
   echo $array['a']?->a;
   
   // displays null, so nothing
   echo $array['b']?->a;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php>`__

See also `Object Operator in PHP <https://www.delftstack.com/howto/php/php-object-operator/>`_

Related : :ref:`Scope Resolution Operator :: <scope-resolution-operator>`, :ref:`Object Operator -> <object-operator>`
