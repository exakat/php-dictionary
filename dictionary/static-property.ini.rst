.. _static-property:

Static Property
---------------

Static properties are properties defined with the static keyword. They may be accessed with the name of the class, or instantiated object. 

.. code-block:: php
   
   <?php
   
   class x {
       static $p = 1;
   }
   
   //displays x::foo
   print x::$p;
   $object = new x;
   
   print $object::$x;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.properties>`__

Related : :ref:`Properties <property>`, :ref:`Static Method <static-method>`
