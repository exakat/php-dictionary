.. _wither:

Class Wither Method
-------------------

With is a prefix, that tells the reader that the getter returns a copy of the object, and not the object itself.  


.. code-block:: php
   
   <?php
   
   class x {
       private A $property;
       
       // getter
       public function getProperty() : A {
           return $this->property;
       }
   
       // wither
       public function withProperty() : A{
           return clone $this->property;
       }
   }
   
   ?>


`Documentation <https://projectlombok.org/features/With>`__

See also `RFC: Accessors <https://wiki.php.net/rfc/property_accessors>`_

Related : :ref:`Classes <class>`, :ref:`Class Setter Method <setter>`, :ref:`Class Getter Method <getter>`
