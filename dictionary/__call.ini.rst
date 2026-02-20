.. _-__call:
.. meta::
	:description:
		__call() Method: ``__call()`` is a magic method: it is called when a method cannot be accessed, either because it doesn't exist, or because its visibility prevents it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __call() Method
	:twitter:description: __call() Method: ``__call()`` is a magic method: it is called when a method cannot be accessed, either because it doesn't exist, or because its visibility prevents it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __call() Method
	:og:type: article
	:og:description: ``__call()`` is a magic method: it is called when a method cannot be accessed, either because it doesn't exist, or because its visibility prevents it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__call.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/ __autoload() is no longer supported, use spl_autoload_register() instead .html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/ __autoload() is no longer supported, use spl_autoload_register() instead .html","name":"__call() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 19 Feb 2026 21:16:36 +0000","dateModified":"Thu, 19 Feb 2026 21:16:36 +0000","description":"``__call()`` is a magic method: it is called when a method cannot be accessed, either because it doesn't exist, or because its visibility prevents it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__call() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__call() Method
---------------

``__call()`` is a magic method: it is called when a method cannot be accessed, either because it doesn't exist, or because its visibility prevents it.

That way, it is possible to create dynamically methods, without hardcoding them. 

The ``__call()`` method receives the name of the target-method, and a list of argument, as an array. 

The ``__call()`` method has a related version for static methods, called ``__callStatic()``.

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

See also https://dev.to/cleancodestudio/php-call-lesson-3-php-magic-methods-5bi0

Related : , :ref:`Magic Methods <magic-method>`, :ref:`Method <method>`
