.. _-__call:
.. meta::
	:description:
		__call() Method: __call() is a magic method : it is called when a method cannot be accessed, either because it doesn't exist, or because its visibility prevents it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __call() Method
	:twitter:description: __call() Method: __call() is a magic method : it is called when a method cannot be accessed, either because it doesn't exist, or because its visibility prevents it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __call() Method
	:og:type: article
	:og:description: __call() is a magic method : it is called when a method cannot be accessed, either because it doesn't exist, or because its visibility prevents it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__call.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"__call() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"__call() is a magic method : it is called when a method cannot be accessed, either because it doesn't exist, or because its visibility prevents it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__call() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__call() Method
---------------

__call() is a magic method : it is called when a method cannot be accessed, either because it doesn't exist, or because its visibility prevents it.

That way, it is possible to create dynamically methods, without hardcoding them. 

The __call() method receives the name of the target-method, and a list of argument, as an array. 

The __call() method has a related version for static methods, called ``__callStatic``.

.. code-block:: php
   
   <?php
   
   class x {
   	private $values = ['a' => 1,
   					   'b' => 2,
   					   ];
   
   	// Checks the dictionary, or return 0
   	function __call($name, $args) {
   		if (method_exists($this, $name)) {
   			return $this->$name(...$args);
   		}
   		
   		return 0;
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php>`__

See also `PHP _call (Lesson 3: PHP Magic Methods) <https://dev.to/cleancodestudio/php-call-lesson-3-php-magic-methods-5bi0>`_

Related : :ref:`__callStatic() Method <-__callStatic>`, :ref:`Magic Methods <magic-method>`, :ref:`Method <method>`
