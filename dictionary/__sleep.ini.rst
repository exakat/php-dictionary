.. _-__sleep:
.. meta::
	:description:
		__sleep() Method: __sleep() is a magic method : it is called an object is being serialized, so that the object may be cleaned.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __sleep() Method
	:twitter:description: __sleep() Method: __sleep() is a magic method : it is called an object is being serialized, so that the object may be cleaned
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __sleep() Method
	:og:type: article
	:og:description: __sleep() is a magic method : it is called an object is being serialized, so that the object may be cleaned
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__sleep.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"__sleep() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"__sleep() is a magic method : it is called an object is being serialized, so that the object may be cleaned","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__sleep() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__sleep() Method
----------------

__sleep() is a magic method : it is called an object is being serialized, so that the object may be cleaned. 

In particular, some resources, such as database connexions or files cannot be serialized. They should be closed, stored as a path, and reopened later with __wakeup().

The __sleep() method is usually paired with the __wakeup() method. 



.. code-block:: php
   
   <?php
   
   class x {
   	private $file;
   	private $path;
   
   	function __sleep() {
   		fclose($this->path);
   	}
   
   	function __wakeup() {
   		$this->path = fopen($this->path, 'r');
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php#object.sleep>`__

See also `PHP __sleep And __wakeup Magic Methods: How And When To Use Them? <https://medium.com/@lukaspereyra8/php-sleep-and-wakeup-magic-methods-how-and-when-to-use-them-938591584bdc>`_, `__sleep() and __wakeup() <https://riptutorial.com/php/example/4604/--sleep---and---wakeup-->`_

Related : :ref:`Magic Methods <magic-method>`, :ref:`__wakeup() Method <-__wakeup>`
