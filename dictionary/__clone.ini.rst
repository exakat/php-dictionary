.. _-__clone:

__clone() Method
----------------

To clone an object is the creation of a new distinct object, from an existing one. This is basically a copy, although the object itself is multiplied by call the clone operator.

By default PHP does a shallow clone, duplicating the scalars (string, integer...) and keeping the same reference to objects. To make a deep clone, the class must define the ``__clone`` magic method.

Cloning is similar to creating another object of the same class, without requiring all the constructor arguments.


.. code-block:: php
   
   <?php
   
   $spike = new Dog('Spike', 'Teckel', 'red');
   $medor = clone $spike;
   
   $medor->setCollar('green'); // distinguish spike and medor by collar
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.cloning.php>`__

See also `How to clone an object in PHP <https://linuxhint.com/cloning_objects_php/>`_

Related : :ref:`Readonly <readonly>`, :ref:`Magic Methods <magic-method>`, :ref:`Deep Clone <deep-clone>`, :ref:`Shallow Clone <shallow-clone>`
