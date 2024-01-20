.. _rangeexception:

RangeException
--------------

The RangeException exception is thrown if a value is out of range. It usually means that a values overflows or underflows.

RangeException are defined by the SPL extension. It is use by the SplStack class.



.. code-block:: php
   
   <?php
   try {
       $var = new SplStack();
       $var->offsetSet(100,new DateTime('2000-01-01'));
   } catch(OutOfRangeException $e) {
       print $e->getMessage()."\n";
   }
   ?>


`Documentation <https://www.php.net/manual/en/class.rangeexception.php>`__

Related : :ref:`Exception <exception>`, :ref:`Overflow <overflow>`, :ref:`Underflow <underflow>`

Added in PHP 5.1
