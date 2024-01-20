.. _php-native-attribute:

PHP Native Attribute
--------------------

PHP supports a system of attribute, to add local configuration to methods, classes, etc. There are currently (PHP 8.3) 5 attributes: 

+ Attribute
+ AllowDynamicProperties
+ ReturnTypeWillChange
+ SensitiveParameter
+ Override

 

.. code-block:: php
   
   <?php
   
   class x extends y {
   	#[Override]
   	function foo() {
   		
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.attributes.php>`__

See also `PHP Native Attributes <https://www.exakat.io/en/php-native-attributes-quick-reference/>`_

Related : :ref:`Attributes <attribute>`, , :ref:`Return Type Will Change <returntypewillchange>`, :ref:`Sensitive Parameter <sensitiveparameter>`, 
