.. _-__isset:
.. meta::
	:description:
		__isset() Method: ``__isset()`` is a magic method : it is called when the existence of a property has to be checked.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __isset() Method
	:twitter:description: __isset() Method: ``__isset()`` is a magic method : it is called when the existence of a property has to be checked
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __isset() Method
	:og:type: article
	:og:description: ``__isset()`` is a magic method : it is called when the existence of a property has to be checked
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__isset.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"__isset() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Feb 2026 09:03:49 +0000","dateModified":"Fri, 06 Feb 2026 09:03:49 +0000","description":"``__isset()`` is a magic method : it is called when the existence of a property has to be checked","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__isset() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__isset() Method
----------------

``__isset()`` is a magic method : it is called when the existence of a property has to be checked.

That way, it is possible to create dynamically properties, without hardcoding them. 

The __isset() method is usually paired with the __get() and __set() methods.

.. code-block:: php
   
   <?php
   
   class x {
   	private $values = ['a' => 1,
   					   'b' => 2,
   					   ];
   
   	function __isset($name) {
   		return isset($this->values[$name]);
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.overloading.php#object.isset>`__

See also https://medium.com/@liamhammett/a-look-at-phps-isset-df64df7158ab

Related : :ref:`Magic Methods <magic-method>`, :ref:`__set() Method <-__set>`, :ref:`__get() Method <-__get>`, 
