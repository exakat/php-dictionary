.. _override:
.. meta::
	:description:
		Override Attribute: This is a native PHP attribute, which tells the engine that a method must be overriding the same method in a parent.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Override Attribute
	:twitter:description: Override Attribute: This is a native PHP attribute, which tells the engine that a method must be overriding the same method in a parent
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Override Attribute
	:og:type: article
	:og:description: This is a native PHP attribute, which tells the engine that a method must be overriding the same method in a parent
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/override.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Override Attribute","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jan 2025 12:52:58 +0000","dateModified":"Tue, 14 Jan 2025 12:52:58 +0000","description":"This is a native PHP attribute, which tells the engine that a method must be overriding the same method in a parent","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Override Attribute.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Override Attribute
------------------

This is a native PHP attribute, which tells the engine that a method must be overriding the same method in a parent.

The overridden method may be in the parent, or any subsequent parent; it may also be defined in a trait, as a concrete definition or an alias.

The error is only reported at execution time. The same error message is used if the class has no parent, at linting time.

This attribute may be added to any method.


.. code-block:: php
   
   <?php
   
   class MyParentClass {
   	function foo() {}
   }
   
   class MyChildClass {
   	#[Override]
   	function foo() {}
   
   	#[Override]
   	function goo() {}
   	// This raise an error, as goo() has no definition in the parent.
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.attributes.classes.php>`__

Added in PHP 8.2+
