.. _-__get:
.. meta::
	:description:
		__get() Method: __get() is a magic method : it is called when a property cannot be access, either because it doesn't exist, or because its visibility prevents it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __get() Method
	:twitter:description: __get() Method: __get() is a magic method : it is called when a property cannot be access, either because it doesn't exist, or because its visibility prevents it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __get() Method
	:og:type: article
	:og:description: __get() is a magic method : it is called when a property cannot be access, either because it doesn't exist, or because its visibility prevents it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__get.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"__get() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"__get() is a magic method : it is called when a property cannot be access, either because it doesn't exist, or because its visibility prevents it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__get() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__get() Method
--------------

__get() is a magic method : it is called when a property cannot be access, either because it doesn't exist, or because its visibility prevents it.

That way, it is possible to create dynamically properties, without hardcoding them. 

The __get() method is usually paired with the __set() method. 



.. code-block:: php
   
   <?php
   
   class x {
   	private $values = ['a' => 1,
   					   'b' => 2,
   					   ];
   
   	// Checks the dictionary, or return 0
   	function __get($name) {
   		if (isset($this->values[$name])) {
   			return $this->values[$name];
   		}
   		
   		return 0;
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php>`__

See also `What are magic methods and how to use them in PHP ? <https://www.geeksforgeeks.org/what-are-magic-methods-and-how-to-use-them-in-php/>`_

Related : :ref:`Magic Methods <magicmethod>`, :ref:`__set() Method <-__set>`, :ref:`__isset() Method <-__isset>`, :ref:`Magic Constants <magic-constant>`
