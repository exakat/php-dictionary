.. _-__tostring:

__toString() Method
-------------------

__tostring() is a magic method : it is called when the object has to be converted into a string.

That way, it is possible to dynamically convert the object to a string and display it, or transmit it to another part of the application. 

__toString() is called when ``strict_types`` is not active. Otherwise, passing an object to a string parameter yields an error: it requires an explicit type cast.

__toString() is always called in concatenation, and string interpolation.

There is no magic method to convert an object to another type.



.. code-block:: php
   
   <?php
   
   class x {
   	private $r = 'S';
   	private $p = 1;
   	private $q = 2;
   
   	// Checks the dictionary, or return 0
   	function __toString() : string {
   	
   		// $this->r is used as is
   		// $this->p is formatted with quotes
   		// $this->q is converted to other values
   		return "$this->r '$this->p' ".($this->q ? 'A' : 'B');
   	}
   }
   
   echo new x;
   
   $y = (string) new x;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php>`__

See also `PHP __toString <https://www.phptutorial.net/php-oop/php-__tostring/>`_

Related : :ref:`strict_types <strict_types>`, :ref:`Magic Methods <magic-method>`, :ref:`Cast Operator <cast>`
