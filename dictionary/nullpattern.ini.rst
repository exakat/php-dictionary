.. _nullpattern:

Null Pattern
------------

The Null Pattern is a design pattern in software development that addresses the handling of null or undefined values in a more controlled and predictable manner. It is also known as the Null Object Pattern.

In many programming languages, including PHP, ``null`` is often used to indicate the absence of a value or an error condition. However, using ``null`` can lead to unexpected errors or code complexity when developers forget to check for null before using a variable, leading to runtime exceptions or bugs.

The Null Pattern suggests creating a special object to represent the absence of a value instead of using null. This object behaves like a regular object but has default or ``null`` behavior, making it safe to use without explicit null checks.

Key principles of the Null Pattern:

    Null Object: Create a specific class that implements a common interface for the objects in question. This class represents the null state and provides default, empty, or no-op implementations of the interface's methods.

    No Null Checks: Instead of checking for null before using an object, you can safely call methods on the Null Object, knowing that it won't throw exceptions or cause errors. This simplifies the code and avoids conditional logic based on null checks.

    Transparency: Code that interacts with the Null Object should treat it like any other object without needing to handle special cases for null.

.. code-block:: php
   
   <?php
   
   interface Logger {
       public function log($message);
   }
   
   class FileLogger implements Logger {
       public function log($message) {
           // Log the message to a file
       }
   }
   
   class NullLogger implements Logger {
       public function log($message) {
           // Do nothing (null behavior)
       }
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Null_object_pattern>`__

See also `Null Object Pattern in PHP <https://nunomaduro.com/null_object_pattern_in_php>`_, `All the way to handle null values in PHP <https://www.amitmerchant.com/all-the-ways-to-handle-null-values-in-php/>`_
