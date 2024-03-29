.. _sensitiveparameter:

Sensitive Parameter
-------------------

This is a native PHP attribute, which tells the engine that a parameter is a sensitive parameter, and should not be displayed by PHP when an error displays the stack trace.

This prevent innocent mistakes, where reading the logs on the production server also tells the actual value of a secret.


.. code-block:: php
   
   <?php
   
   function foo(
       #[SensitiveParameter] string $apiKey
   ): int {
       throw new Exception('Could not foo');
   }
   
   foo('abc');
   
   /* The code above displays the following : 
   
   Fatal error: Uncaught Exception: Could not foo in file.php:6
   Stack trace:
   #0 file.php(9): foo(Object(SensitiveParameterValue))
   #1 {main}
     thrown in file.php on line 6
   */
   
   ?>


`Documentation <https://www.php.net/manual/en/language.attributes.classes.php>`__

See also `Sensitive parameters in PHP 8.2 <https://flareapp.io/blog/57-sensitive-parameters-in-php-82>`_

Added in PHP 8.2+
