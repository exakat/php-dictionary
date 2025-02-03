.. _virtual-property:
.. meta::
	:description:
		Virtual Property: A virtual property is a class property, whose property hooks don't use the value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Virtual Property
	:twitter:description: Virtual Property: A virtual property is a class property, whose property hooks don't use the value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Virtual Property
	:og:type: article
	:og:description: A virtual property is a class property, whose property hooks don't use the value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/virtual-property.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Virtual Property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jan 2025 12:52:58 +0000","dateModified":"Tue, 14 Jan 2025 12:52:58 +0000","description":"A virtual property is a class property, whose property hooks don't use the value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Virtual Property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Virtual Property
----------------

A virtual property is a class property, whose property hooks don't use the value. The virtual property has no need for actual storage, and rely on other means to provide (get and set) the value.

.. code-block:: php
   
   <?php
   
   class counter() {
   	private $count = 1;
   	
   	// $next is a virtual property : it doesn't rely on $this->next;
   	public $next {
   		get => $this->count + 1;
   		set {}
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.property-hooks.php>`__

See also https://geekytomato.com/php-8-4-property-hooks-virtual-properties-and-potential-issues/

Added in PHP 8.4+
