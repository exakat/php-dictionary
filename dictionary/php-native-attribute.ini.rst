.. _php-native-attribute:
.. meta::
	:description:
		PHP Native Attribute: PHP supports a system of attributes, to add local configuration to methods, classes, etc.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP Native Attribute
	:twitter:description: PHP Native Attribute: PHP supports a system of attributes, to add local configuration to methods, classes, etc
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PHP Native Attribute
	:og:type: article
	:og:description: PHP supports a system of attributes, to add local configuration to methods, classes, etc
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/php-native-attribute.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"PHP Native Attribute","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Sep 2025 19:45:26 +0000","dateModified":"Mon, 15 Sep 2025 19:45:26 +0000","description":"PHP supports a system of attributes, to add local configuration to methods, classes, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PHP Native Attribute.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


PHP Native Attribute
--------------------

PHP supports a system of attributes, to add local configuration to methods, classes, etc. There are currently (PHP 8.4) 5 attributes: 

+ ``Attribute``
+ ``AllowDynamicProperties``
+ ``ReturnTypeWillChange``
+ ``SensitiveParameter``
+ ``Override``
+ ``Deprecated``.

.. code-block:: php
   
   <?php
   
   class X extends Y {
   	#[Override]
   	function foo() {
   		
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.attributes.php>`__

See also `PHP Native Attributes <https://www.exakat.io/en/php-native-attributes-quick-reference/>`_

Related : :ref:`Attribute <attribute>`, :ref:`Allow Dynamic Properties <allowdynamicproperties>`, :ref:`Return Type Will Change <returntypewillchange>`, :ref:`Sensitive Parameter <sensitiveparameter>`, :ref:`Override Attribute <override>`, :ref:`Deprecated <deprecated>`
