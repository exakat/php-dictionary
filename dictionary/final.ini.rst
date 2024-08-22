.. _final:

Final Keyword
-------------

The final keyword prevents child classes from overriding a method or a constant by prefixing the definition with final.

The final keyword cannot be used with the private keyword : a private method is not visible in the child classes, and can't also be redefined.



.. code-block:: php
   
   <?php
   
   class x {
       final const X = 1;
       
       final function method() { }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.final.php>`__

See also `Final Classes: Open for Extension, Closed for Inheritance <https://verraes.net/2014/05/final-classes-in-php/>`_

Related : :ref:`Overwrite <overwrite>`, :ref:`Private Visibility <private>`, :ref:`Abstract Class <abstract-class>`, :ref:`Abstract Keyword <abstract>`

Added in PHP 7.0
