.. _virtual-property:
.. meta::
	:description:
		Virtual Property: A virtual property is a class property, whose property hooks don't use the value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Virtual Property
	:twitter:description: Virtual Property: A virtual property is a class property, whose property hooks don't use the value
	:twitter:creator: @exakat
	:og:title: Virtual Property
	:og:type: article
	:og:description: A virtual property is a class property, whose property hooks don't use the value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/virtual-property.ini.html
	:og:locale: en


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


Added in PHP 8.4+
