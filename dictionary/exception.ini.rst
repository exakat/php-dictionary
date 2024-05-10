.. _exception:

Exception
---------

Exceptions are a mechanism for handling errors and exceptional situations in a more structured and controlled way compared to traditional error handling methods like using error codes or die() statements. Exceptions provide a way to separate the normal flow of code from error-handling code, making it easier to manage errors and maintain clean and readable code.

Exceptions are thrown at the point of detection of the issue, and processed somewhere else in the code, when they are caught by a try-catch statement. Ultimately, exceptions block the execution of the application when they are not caught.


.. code-block:: php
   
   <?php
   
   class x {
       final const X = 1;
       
       final function method() { }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.exceptions.php>`__

See also `Modern Error handling in PHP <https://netgen.io/blog/modern-error-handling-in-php>`_, `PHP try & catch: what are exceptions and how to handle them? <https://benjamincrozat.com/php-exceptions>`_, `The PHP Exception Class Hierarchy <https://blog.airbrake.io/blog/php-exception-handling/the-php-exception-class-hierarchy>`_, `Mastering Exception Handling in PHP: Ensuring Code Resilience <https://dev.to/devmahfuz/mastering-exception-handling-in-php-ensuring-code-resilience-3pk5>`_

Related : :ref:`throw <throw>`, :ref:`Try-catch <try-catch>`, :ref:`Chaining Exceptions <exception-chain>`
