.. _stdclass:

stdclass
--------

Stdclass is a native PHP class. It is the class used when a generic object is created, for example with json_decode() or the (object) cast operator.

The stdClass is allowed to create dynamic properties on the fly, as its base definition has none. 


.. code-block:: php
   
   <?php
   
   class X {
       private $property = 1;
       
       function foo() {
           // dynamic property
           $this->a = 1;
           
           // dynamic property with variable name 
           $b = "abc";
           $this->$b = 1; 
           
           // static property
           $this->property = 1;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.object.php#language.types.object.casting>`__

See also `Quick way to create a PHP stdClass <https://www.simonholywell.com/post/2016/11/quick-way-to-create-php-stdclass/>`_

Related : :ref:`Properties <property>`, :ref:`Dynamic Properties <dynamic-property>`
