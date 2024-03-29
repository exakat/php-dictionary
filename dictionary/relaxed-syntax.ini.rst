.. _relaxed-syntax:

Relaxed Syntax
--------------

Relaxed syntax refers to the extra freedom in naming class elements, such as constant and methods, compared to creating global constant and functions. 

In particular, keywords are allowed for class constants and methods, while they are forbidden for global constants and functions. 

Note that using PHP keywords in specific 


.. code-block:: php
   
   <?php
   
   // That is not possible, as array is already reserved
   // function array() {}
   // const array = [];
   
   class x {
     	function array() { return [1]; }
   	const array = [2];
   
   	function foo() {
   		return $this->array() + self::array;
   	}
   }
   
   ?>


See also `Loosening Reserved Word Restrictions <https://www.php.net/manual/en/migration70.other-changes.php#migration70.other-changes.loosening-reserved-words>`_

Related : :ref:`Naming <naming>`
