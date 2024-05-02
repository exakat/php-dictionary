.. _typerror:

Type Error
----------

A ``TypeError`` is an error that occurs when there is a mismatch between the expected data type and the actual data type of a variable or value in your code. This applies to method arguments, property types and method return types. 

PHP is a dynamically typed language, which means that variable types are not explicitly declared, and PHP determines the data type at runtime. ``TypeError`` can occur when PHP encounters a situation where the expected data type does not match the actual data type.

``TypeError`` apply to typed custom methods, native PHP methods and operators. ``TypeError`` do not represent an invalid value: for example, an argument may be typed ``int``, and later used in a division, while being zero. This situation will yield a different exception.

``TypeError`` are a kind of ``Throwable``. 


.. code-block:: php
   
   <?php
   
   function foo(User $user) {
   
   }
   
   try {
       foo('a');
   } catch (TypeError $e) {
       print "Wrong type of data\n";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.typeerror.php>`__

See also `PHP Exception Handling - TypeError <https://blog.airbrake.io/blog/php-exception-handling/php-typeerror>`_

Related : :ref:`Exception <exception>`, :ref:`Throwable <throwable>`
