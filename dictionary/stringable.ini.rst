.. _stringable:

Stringable
----------

Stringable is a type, which represents variables that may be used as as string : either a string, a heredoc or a string constant; or an object which has the `__toString()` method.

Stringable is automatically added to any class (and subclass) that has the `__toString()` method, though it is recommended to add it explicitly.


.. code-block:: php
   
   <?php
   
   function foo(stringable $s) {
   	print $s;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.stringable.php>`__

See also `What is Stringable Interface in PHP 8? <https://www.tutorialspoint.com/what-is-stringable-interface-in-php-8>`_

Related : :ref:`String <string>`

Added in PHP 8.0
