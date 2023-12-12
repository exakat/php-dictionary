.. _deep-clone:

Deep Clone
----------

A deep clone is an object cloning, where the cloned object also clone its own object properties. This prevents the original object to share data with the cloned one, yet it is slower to process.

Deep cloning is achieved by using the ``__clone`` magic method. By default, PHP does shallow clone.


.. code-block:: php
   
   <?php
   
   class Dog {
       private $name = '';
       private Address $address;
   
       function __construct(string $name, Address $address) {
           $this->address->setName($address);
       }
       
       function moves(string $address) {
           $this->address->setName($address);
       }
   
       function __clone() {
           $this->address = clone $this->address;
       }
   }
   
   $spike = new Dog('Spike', new Address('Acme city'));
   $medor = clone $spike;
   $medor->moves('Upstate farm');
   
   // spike and medor do now share the same address
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.cloning.php>`__

See also `How to clone an object in PHP <https://linuxhint.com/cloning_objects_php/>`_

Related : :ref:`Magic Methods <magic-method>`, :ref:`__clone() method <-__clone>`, :ref:`Shallow Clone <shallow-clone>`
