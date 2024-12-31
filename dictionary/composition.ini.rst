.. _composition:
.. meta::
	:description:
		Composition: Composition is the creation of new classes, by including other classes, and delivering a specific interface over them.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Composition
	:twitter:description: Composition: Composition is the creation of new classes, by including other classes, and delivering a specific interface over them
	:twitter:creator: @exakat
	:og:title: Composition
	:og:type: article
	:og:description: Composition is the creation of new classes, by including other classes, and delivering a specific interface over them
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/composition.ini.html
	:og:locale: en


Composition
-----------

Composition is the creation of new classes, by including other classes, and delivering a specific interface over them.

.. code-block:: php
   
   <?php
   
   class Wheel {
       int $diameter;
   }
   
   class GasTank {
       int $capacity;
   
       public function fillUp(int $amount) {
           $this->amount = $amount;
       }
   
       public function empty() {
           $this->amount = 0;
       }
   
   }
   
   // Car composes 2 other classes: GasTank and Wheel
   // These object should be accessed via the Car class, not the direct objects
   class Car {
       Wheel $wheels;
       GasTank $gasTank;
       
       public function fillUp(int $amount) {
           $this->gasTank->fillUp($amount);
       }
   
       // empty() the gasTank is now available via the car (just drive it, or and it to garage)
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Object_composition>`__

See also `Composition Over Inheritance in PHP <https://wendelladriel.com/blog/composition-over-inheritance-in-php>`_, `Object composition in PHP with Example <https://mohasin-dev.medium.com/object-composition-in-php-with-example-ce5855b0473b>`_

Related : :ref:`Inheritance <inheritance>`
