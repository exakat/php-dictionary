.. _$this:

$this
-----

$this is a variable that represents the current object. It is different in each object, each method. 

$this is also called a pseudo-variable. It is never explicitely set, but is available as soon as the method starts. 

$this cannot be unset, nor assigned a different value than the current object. This means it cannot be used as an argument, for example.

There is no special variable called `$that`.

.. code-block:: php
   
   <?php
   
   class x {
   	private $y = 1;
   
   	function foo() {
   		return $this->y;
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.this.php>`__

See also `PHP $this <https://www.phptutorial.net/php-oop/php-this/>`_, `The $this keyword <https://phpenthusiast.com/object-oriented-php-tutorials/the-this-key-word>`_
