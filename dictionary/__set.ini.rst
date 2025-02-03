.. _-__set:
.. meta::
	:description:
		__set() Method: __set() is a magic method : it is called when a property cannot be access, either because it doesn't exist, or because its visibility prevents it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __set() Method
	:twitter:description: __set() Method: __set() is a magic method : it is called when a property cannot be access, either because it doesn't exist, or because its visibility prevents it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __set() Method
	:og:type: article
	:og:description: __set() is a magic method : it is called when a property cannot be access, either because it doesn't exist, or because its visibility prevents it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__set.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"__set() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 21 Jan 2025 08:40:17 +0000","dateModified":"Tue, 21 Jan 2025 08:40:17 +0000","description":"__set() is a magic method : it is called when a property cannot be access, either because it doesn't exist, or because its visibility prevents it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__set() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__set() Method
--------------

__set() is a magic method : it is called when a property cannot be access, either because it doesn't exist, or because its visibility prevents it. It is used to give a value to the property.

That way, it is possible to create dynamically properties, without hardcoding them. 

The __set() method is usually paired with the __get() method. 



.. code-block:: php
   
   <?php
   
   class x {
   	private $values = ['a' => 1,
   					   'b' => 2,
   					   ];
   
   	// Checks the dictionary, or return 0
   	function __set($name, $value) {
   		if (isset($this->values[$name])) {
   			$this->values[$name] = $value;
   		}
   		
   		//do not set new values
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php>`__

Related : :ref:`Magic Methods <magicmethod>`, :ref:`__get() Method <-__get>`, :ref:`__isset() Method <-__isset>`, :ref:`Magic Constants <magic-constant>`
