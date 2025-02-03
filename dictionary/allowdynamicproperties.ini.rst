.. _allowdynamicproperties:
.. meta::
	:description:
		Allow Dynamic Properties: This is a native PHP attribute, which tells the engine that a class can dynamically create properties without declaring them.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Allow Dynamic Properties
	:twitter:description: Allow Dynamic Properties: This is a native PHP attribute, which tells the engine that a class can dynamically create properties without declaring them
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Allow Dynamic Properties
	:og:type: article
	:og:description: This is a native PHP attribute, which tells the engine that a class can dynamically create properties without declaring them
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/allowdynamicproperties.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Allow Dynamic Properties","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"This is a native PHP attribute, which tells the engine that a class can dynamically create properties without declaring them","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Allow Dynamic Properties.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Allow Dynamic Properties
------------------------

This is a native PHP attribute, which tells the engine that a class can dynamically create properties without declaring them.

This attribute may be added to any class. It is not necessary with ``stdClass``.

The attributes allow any dynamic property: there is no way to restrict this to a set of names or a number without other means.


.. code-block:: php
   
   <?php
   
   class MyClass {
   	function foo() {
   		// creation of a property, without prior definition
   		// This yields an error
   		$this->p  = 1;
   	}
   }
   
   #[AllowDynamicProperty]
   class MyOtherClass {
   	function foo() {
   		// creation of a property, without prior definition
   		// This doesn't yields an error
   		$this->p  = 1;
   	}
   }
   
   class MyThirdClass extends Stdclass {
   	function foo() {
   		// creation of a property, without prior definition
   		// This doesn't yields an error, yet no attribute
   		$this->p  = 1;
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.attributes.classes.php>`__

See also `No More Dynamic Properties in PHP 9. <https://medium.com/@dotcom.software/no-more-dynamic-properties-in-php-9-the-language-is-evolving-260fd70da5e8>`_, `I hate the deprecation of dynamic properties. <https://www.reddit.com/r/PHP/comments/10u90o2/i_hate_the_deprecation_of_dynamic_properties/>`_

Related : :ref:`PHP Native Attribute <php-native-attribute>`

Added in PHP 8.2+
