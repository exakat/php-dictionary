.. _setter:

Class Setter Method
-------------------

Setters are methods used to give the values of a property. Setters may apply some filtering and validation before accepting the value.

Setters are usually created with a getter method.


.. code-block:: php
   
   <?php
   
   class x {
       private $property;
       
       public function setProperty($value) {
           $this->property = $value;
       }
   }
   
   ?>


`Documentation <https://thisinterestsme.com/php-getters-and-setters/>`__

See also `What are getters and setters methods in PHP? <https://www.tutorialspoint.com/what-are-getters-and-setters-methods-in-php>`_

Related : :ref:`Classes <class>`, :ref:`Class Getter Method <getter>`, :ref:`Class Wither Method <wither>`

Added in PHP 5.0+
