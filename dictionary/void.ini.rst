.. _void:

Void
----

Void is a return type. It marks methods which do not return anything. 

Indeed, void methods should not use the return statement, or, when they do, use it without any argument. 

Void is only possible with methods, closures, functions and arrow functions. It makes no sense with properties or parameters.


.. code-block:: php
   
   <?php
   
   function foo() : void {}
   
   ?>


`Documentation <https://www.php.net/manual/en/migration71.new-features.php#migration71.new-features.void-functions>`__

See also `Type Hinting No Return(Void) <https://riptutorial.com/php/example/20542/type-hinting-no-return-void->`_

Related : :ref:`Null <null>`

Added in PHP 7.1
