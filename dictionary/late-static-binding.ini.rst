.. _late-static-binding:
.. _late-binding:

Late Static Binding
-------------------

PHP implements a feature called late static bindings which can be used to reference the called class in a context of static inheritance.

.. code-block:: php
   
   <?php
   class A {
       public static function who() {
           echo __CLASS__;
       }
       public static function test() {
           static::who(); // Here comes Late Static Bindings
       }
   }
   
   class B extends A {
       public static function who() {
           echo __CLASS__;
       }
   }
   
   B::test();
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.late-static-bindings.php>`__

See also `Late static binding in PHP - What, How & When <https://www.amitmerchant.com/late-static-binding-php-what-how-when/>`_, `A real life example of using Late Static Binding in PHP <https://dev.to/asifzcpe/a-real-life-example-of-using-late-static-binding-in-php-h6b/>`_

Related : :ref:`Self <self>`, :ref:`static <static>`, :ref:`parent <parent>`, :ref:`Early Binding <early-binding>`
