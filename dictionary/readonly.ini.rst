.. _readonly:

Readonly
--------

A property can be declared with the readonly modifier, which prevents modification of the property after initialization.

Readonly also applies inside the __clone() magic method : cloning doesn't allow for changing a readonly property.

In PHP 8.2, a class may be readonly, making all of of its properties readonly too. 


.. code-block:: php
   
   <?php
   
   class Test {
      public readonly string $prop;
   
      public function __construct(string $prop) {
          // Legal initialization.
          $this->prop = $prop;
      }
   }
   
   $test = new Test("foobar");
   // Legal read.
   var_dump($test->prop); // string(6) "foobar" 
   
   // Illegal reassignment. It does not matter that the assigned value is the same.
   $test->prop = "foobar";
   // Error: Cannot modify readonly property Test::$prop
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties>`__

Related : :ref:`Classes <class>`, :ref:`__clone() Method <-__clone>`, :ref:`Properties <property>`

Added in PHP 8.1
