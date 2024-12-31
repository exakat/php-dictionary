.. _php-native-attribute:
.. meta::
	:description:
		PHP Native Attribute: PHP supports a system of attribute, to add local configuration to methods, classes, etc.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP Native Attribute
	:twitter:description: PHP Native Attribute: PHP supports a system of attribute, to add local configuration to methods, classes, etc
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PHP Native Attribute
	:og:type: article
	:og:description: PHP supports a system of attribute, to add local configuration to methods, classes, etc
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/php-native-attribute.ini.html
	:og:locale: en


PHP Native Attribute
--------------------

PHP supports a system of attribute, to add local configuration to methods, classes, etc. There are currently (PHP 8.3) 5 attributes: 

+ Attribute
+ AllowDynamicProperties
+ ReturnTypeWillChange
+ SensitiveParameter
+ Override
+ Deprecated

 

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

Related : :ref:`Attributes <attribute>`, , :ref:`Return Type Will Change <returntypewillchange>`, :ref:`Sensitive Parameter <sensitiveparameter>`, :ref:`Override Attribute <override>`, :ref:`Deprecated <deprecated>`
