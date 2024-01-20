.. _unserialization:
.. _unserialize:

Unserialization
---------------

Unserialization is the extraction of an object from a string representation of an object.

The reverse process is serialization. 

In PHP, there are different ways to implement serialization. The native way is to rely on the serialize() and unserialize(), which, in turn, rely on the __serialize() and __unserialize() magic method. Then, var_export() and require() make another serialization method. WDDX, XML, JSON or YAML all work as serialization, yet they usually are not considered, over speed or performance issues. 



.. code-block:: php
   
   <?php
   
   class X {
       private const X = 1;
       
       function foo() {
           // same as \X::C;
           return self::C;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.serialization.php>`__

See also `Benchmarking serialization <https://peakd.com/hive-168588/@crell/benchmarking-serialization>`_

Related : :ref:`__serialize() method <-__serialize>`, :ref:`__unserialize() method <-__unserialize>`
