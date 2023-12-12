.. _static-method:

Static Method
-------------

Static methods are methods defined with the static keyword. They have to be called with the name of the class, rather than instantiated object. 

.. code-block:: php
   
   <?php
   
   class x {
       static function foo() {
           echo __METHOD__;
       }
   }
   
   //displays x::foo
   x::foo();
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.methods>`__

See also `When to use static methods <https://verraes.net/2014/06/when-to-use-static-methods-in-php/>`_

Related : :ref:`Method <method>`
