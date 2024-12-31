.. _dynamic-property:
.. meta::
	:description:
		Dynamic Properties: Dynamic properties are properties created on the fly, without previous definition.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dynamic Properties
	:twitter:description: Dynamic Properties: Dynamic properties are properties created on the fly, without previous definition
	:twitter:creator: @exakat
	:og:title: Dynamic Properties
	:og:type: article
	:og:description: Dynamic properties are properties created on the fly, without previous definition
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dynamic-property.ini.html
	:og:locale: en


Dynamic Properties
------------------

Dynamic properties are properties created on the fly, without previous definition. 

When the class implements the magic methods __get() and __set(), of if the class extends stdclass, then no warning is emitted.

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


`Documentation <https://wiki.php.net/rfc/deprecate_dynamic_properties>`__

See also `PHP, what are dynamic properties? <https://medium.com/geekculture/php-what-are-dynamic-properties-2509c6fbccf8>`_

Related : :ref:`Properties <property>`, :ref:`Magic Methods <magic-method>`, :ref:`stdclass <stdclass>`
