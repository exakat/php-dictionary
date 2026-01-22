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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Virtual Property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 06:07:26 +0000","dateModified":"Thu, 22 Jan 2026 06:07:26 +0000","description":"A virtual property is a class property, whose property hooks don't use the value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Virtual Property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Virtual Property
----------------

A virtual property is a class property, whose property hooks don't use the value. The virtual property has no need for actual storage, and relies on other means to provide the value. In effect, they rely on the property hooks ``get`` and ``set`` to access the value. They also rely on other properties, global variables or data generators to provide a value.

A virtual property cannot be ``static``, as property hooks are not supported for this type of properties.

.. code-block:: php
   
   <?php
   
   class Counter {
   	private $count = 1;
   	
   	// $next is a virtual property : it doesn't rely on $this->next;
   	public $next {
   		get => $this->count + 1 + rand(0, 10);
   		set {}
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.property-hooks.php>`__

See also https://geekytomato.com/php-8-4-property-hooks-virtual-properties-and-potential-issues/

Related : :ref:`Properties <property>`, :ref:`Property Hook <property-hook>`

Added in PHP 8.4+
