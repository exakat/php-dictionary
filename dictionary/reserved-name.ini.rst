.. _reserved-name:

Reserved Names
--------------

PHP shares several namespaces with the users, and has reserved some names for its own usage. 

+ Namespaces : the global namespace, also known as ``\`` is reserved for PHP.
+ Keywords : ``fn``, ``finally``, ``insteadof``, ``null``, ``void``, ...
+ classes, constants, functions, interfaces
+ variables : ``$GLOBALS``, ``$_GET``,...



.. code-block:: php
   
   <?php
   
   // function void() would not compile
   function theVoid() : bool { }
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.php>`__

See also `Predefined Variables <https://www.php.net/manual/en/language.variables.predefined.php>`_
