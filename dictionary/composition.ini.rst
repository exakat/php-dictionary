.. _composition:
.. meta::
	:description:
		Composition: Composition is the creation of new classes, by including other classes, and delivering a specific interface over them.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Composition
	:twitter:description: Composition: Composition is the creation of new classes, by including other classes, and delivering a specific interface over them
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Composition
	:og:type: article
	:og:description: Composition is the creation of new classes, by including other classes, and delivering a specific interface over them
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/composition.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Composition","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 16:59:52 +0000","dateModified":"Fri, 16 Jan 2026 16:59:52 +0000","description":"Composition is the creation of new classes, by including other classes, and delivering a specific interface over them","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Composition.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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

See also https://wendelladriel.com/blog/composition-over-inheritance-in-php, https://mohasin-dev.medium.com/object-composition-in-php-with-example-ce5855b0473b

Related : :ref:`Inheritance <inheritance>`
