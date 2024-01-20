.. _clone:

Clone
-----

Clone makes a duplicate of an object.

PHP makes a shallow clone : it will only make a copy of the scalars properties, and it will keep the reference to any object untouched. This means that objects are shared between an object and its clone. 

To perform a deep clone, aka to clone an object and its referenced properties, there is the magic method __clone().



.. code-block:: php
   
   <?php
   
   class x { }
   
   // instantiation
   $x = new x;
   
   // cloning
   $y = clone $x;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.cloning.php>`__

See also `What happens when we clone? <https://doeken.org/blog/what-happens-when-we-clone>`_, `Object Cloning <https://www.php.net/manual/en/language.oop5.cloning.php>`_, `How to clone an object in PHP <https://linuxhint.com/cloning_objects_php/>`_, `PHP Clone All The Things <https://jolicode.com/blog/php-clone-all-the-things>`_

Related : :ref:`Shallow Clone <shallow-clone>`, :ref:`Deep Clone <deep-clone>`

Added in PHP 4.0+
