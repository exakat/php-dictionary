.. _class-invasion:

Class Invasion
--------------

Objects of the same type have access to each others private and protected features (properties, constants and methods) even though they are not the same instances. 

Class invasion doesn't work when running an external closure inside the class.


.. code-block:: php
   
   <?php
   
   class X {
       private $p = "abc";
       
       private function privateMethod() { echo __METHOD__; }
   
       function foo(X $x) {
           echo $x->p;
       }
       
       function set($s) {
           $this->p = $s;
       }
       
       function goo() {
       	// The other object accesses the current one's private method
       	$y = new X; 
       	$y->privateMethod();
       }
   }
   
   class Y extends X { }
   
   $x1 = new x;
   $x1->set('xyz');
   
   $x2 = nex x;
   $x2->foo($x1);
   // display xyz
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.visibility.php#language.oop5.visibility-other-objects>`__

See also `Invading private properties and methods in PHP <https://freek.dev/2192-invading-private-properties-and-methods-in-php>`_

Related : :ref:`Classes <class>`, :ref:`Visibility <visibility>`

Related packages : `spatie/invade <https://packagist.org/packages/spatie/invade>`_
