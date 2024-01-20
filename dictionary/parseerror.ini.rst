.. _parseerror:

ParseError
----------

A ParseError is thrown when an error occurs while parsing PHP code, such as when eval() is called or when including non-compilable code. 

.. code-block:: php
   
   <?php
   
   try {
   	eval (' A A ');
   } catch (ParseError $e) {
   	echo "This is not PHP code";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.parseerror.php>`__

Related : :ref:`Error <error>`, :ref:`Eval() <eval>`

Added in PHP 7.0+
