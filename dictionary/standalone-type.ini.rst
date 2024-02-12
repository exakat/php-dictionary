.. _standalone-types:

Standalone Types
----------------

Types are standalone, as they can be use alone, in a type declaration. This is the case of almost any type of PHP, scalar, or class. The only exception used to be false and null.

Null needed to be associated to another type, and was not standalone. False also was introduced as a non-standalone type, where it had to be associated with another type. 

Since PHP 8.2 (and 8.3 for true), those types are now standalone and can be used by themselves. They are also called a 'literal type' as they define both the type and the value. 

.. code-block:: php
   
   <?php
   
   function foo(true $t) {
   	// $t can only be true
   	var_dump($t);
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.literal.php>`__

See also `What's the 'true' Standalone Type in PHP? <https://www.designcise.com/web/tutorial/what-is-the-true-standalone-type-in-php>`_
