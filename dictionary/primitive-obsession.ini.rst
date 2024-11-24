.. _primitive-obsession:

Primitive Obsession
-------------------

Primitive Obsession is when the code uses too many primitive types to represent complex concepts.

.. code-block:: php
   
   <?php
   
   class Person
   {
       public string $id;
   
       public string $firstName;
       public string $lastName;
   
       public string $address;
       public string $postCode;
       public string $city;
       public string $country;
   }
   
   ?>


See also `Primitive Obsession <https://refactoring.guru/smells/primitive-obsession>`_

Related : :ref:`Scalar Types <scalar-type>`
