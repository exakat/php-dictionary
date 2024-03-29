.. _object-invasion:

Object Invasion
---------------

PHP allows objects of one class to access private structures of an object of the same class.

This is useful when cloning or importing objects with __set_state() : within the same class, those methods can create new objects and assign all their properties.

This feature break OOP encapsulation : even when using private visibility, it is possible to access then from outside the object. 


.. code-block:: php
   
   
   <?php
   
   class A {
   	private $p = 0;
   	
   	// accessing a different object
   	function foo(A $a) {
   		$a->p = $this->p;
   	}
   
   	function __set_state($array) {
   		$object = new self();
   		$object->p = $array['p'];
   		
   		return $object;
   	}
   }
   
   ?>
   


`Documentation <https://www.php.net/manual/en/language.oop5.visibility.php#language.oop5.visibility-other-objects>`__

Related : :ref:`__set_state() method <-__set_state>`

Related packages : `spatie/invade <https://packagist.org/packages/spatie/invade>`_
