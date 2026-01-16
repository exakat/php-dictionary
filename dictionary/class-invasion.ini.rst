.. _class-invasion:
.. meta::
	:description:
		Class Invasion: Objects of the same type have access to each others private and protected features (properties, constants and methods) even though they are not the same instances.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class Invasion
	:twitter:description: Class Invasion: Objects of the same type have access to each others private and protected features (properties, constants and methods) even though they are not the same instances
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Class Invasion
	:og:type: article
	:og:description: Objects of the same type have access to each others private and protected features (properties, constants and methods) even though they are not the same instances
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/class-invasion.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Class Invasion","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 16:59:52 +0000","dateModified":"Fri, 16 Jan 2026 16:59:52 +0000","description":"Objects of the same type have access to each others private and protected features (properties, constants and methods) even though they are not the same instances","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Class Invasion.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Class Invasion
--------------

Objects of the same type have access to each others private and protected features (properties, constants and methods) even though they are not the same instances. 

This means that the host object of a class A can call any method and property on a different object of the same class.

It also works between siblings class. When the called method is defined in the parent class, protected methods are also accessible that way. 

Class invasion works on private and protected methods, properties and constants. 

Class invasion doesn't work when running an external closure inside the class.

.. code-block:: php
   
   <?php
   
   // Example of Host class accessing local object (direct class invasion)
   class X {
       private $p = \abc\;
       private const X = 'def';
       
       private function privateMethod() { echo __METHOD__; }
   
       function foo(X $x) {
           echo $x->p;
           echo $x::X; // also works on constant, though less useful
       }
       
       function set($s) {
           $this->p = $s;
       }
       
       function goo() {
       	// The current object ($this) calls the local object's private method
       	$x = new X; 
       	$x->privateMethod();
       }
   }
   
   $x1 = new x;
   $x1->set('xyz');
   
   $x2 = nex x;
   $x2->foo($x1);
   // display xyzdef
   
   // class invasion between sibling classes
   class parent {
       // Necessary. Could be abstract too.     
       protected function execute() { echo __METHOD__; }
   }
   
   class sister extends parent {
       // cannot be called outside of y or x
       protected function execute() { echo __METHOD__; }
   }
   
   class brother extends parent {
       // calling a sister's class method 
       function foo($y) { $y->execute(); }
   }
   
   (new brother)->foo(new sister);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.visibility.php#language.oop5.visibility-other-objects>`__

See also https://freek.dev/2192-invading-private-properties-and-methods-in-php

Related : :ref:`Class <class>`, :ref:`Visibility <visibility>`

Related packages : `spatie/invade <https://packagist.org/packages/spatie/invade>`_
