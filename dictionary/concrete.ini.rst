.. _concrete:

Concrete Class
--------------

PHP has abstract classes and methods: the contrary to ``abstract`` is concrete. This is the default state of a method or class, when it has a code block with implementation. It also has no specific keyword to designate it.

.. code-block:: php
   
   <?php
   abstract class AbstractClass
   {
       // Concrete method
       public function printOut() {
           print $this->getValue() . "\n";
       }
   
       // Method without an implementation
       abstract protected function getValue();
    }
   
   ?>


Related : :ref:`Abstract Keyword <abstract>`
