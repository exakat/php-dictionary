.. _dynamic-call:

Dynamic Call
------------

A dynamic call happens when part of the syntax comes from a variable, and is not known at code writing time.

In PHP, every syntax may use a dynamic call.



.. code-block:: php
   
   
   <?php
   
   $constant = "Name";
   echo constant($constant); 
   echo constant("someClass::$constant"); 
   
   $variable = 'a';
   $a = 'b';
   echo $$variable; // b
   
   $function = 'mine';
   $function($arg);
   
   $className = '\stdclass';
   new $className;
   
   $method = 'method';
   $object->$method();
   
   echo $object::CONSTANT;
   
   ?>
   


`Documentation <https://www.php.net/manual/en/language.generators.syntax.php#control-structures.yield.from>`__

See also `All the Dynamic Syntaxes in PHP <https://www.exakat.io/en/all-the-dynamic-syntaxes-in-php/>`_
