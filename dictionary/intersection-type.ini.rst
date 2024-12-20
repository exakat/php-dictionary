.. _intersection-type:
.. _intersectional:
.. _intersectional-type:

Intersection Type
-----------------

Intersection types, also called intersectional types, is a specification syntax where several types act together as a single type. The individual types are separated with the & operator. 

The value typed with an intersection type must satisfy all the types at the same time. 

Intersection types don't work with scalar values, which are excluding one another. It works with polymorphism, where one object may be of several types at the same time, when implementing interfaces. 


.. code-block:: php
   
   <?php
   
   class x {
   	// Property is of type A, B and C at the same time. 
   	// Two of them have to be interfaces.
       private A & B & C $property;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.type-system.php#language.types.type-system.composite.intersection>`__

See also `How the New Intersection Types in PHP 8.1 Give You More Flexibility <https://www.howtogeek.com/devops/how-the-new-intersection-types-in-php-8-1-give-you-more-flexibility/>`_

Related : :ref:`Type System <type>`

Added in PHP 8.1
