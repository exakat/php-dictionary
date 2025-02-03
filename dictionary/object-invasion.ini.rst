.. _object-invasion:
.. meta::
	:description:
		Object Invasion: PHP allows objects of one class to access private structures of an object of the same class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Object Invasion
	:twitter:description: Object Invasion: PHP allows objects of one class to access private structures of an object of the same class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Object Invasion
	:og:type: article
	:og:description: PHP allows objects of one class to access private structures of an object of the same class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/object-invasion.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Object Invasion","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"PHP allows objects of one class to access private structures of an object of the same class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Object Invasion.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Object Invasion
---------------

PHP allows objects of one class to access private structures of an object of the same class.

This is useful when cloning or importing objects with __set_state() : within the same class, those methods can create new objects and assign all their properties.

This feature break OOP encapsulation : even when using private visibility, it is possible to access then from outside the object. 


.. code-block:: php
   
   
   <?php
   
   class A {
   	private $p = 0;
   	
   	// accessing a different object
   	function foo(A $a) {
   		$a->p = $this->p;
   	}
   
   	function __set_state($array) {
   		$object = new self();
   		$object->p = $array['p'];
   		
   		return $object;
   	}
   }
   
   ?>
   


`Documentation <https://www.php.net/manual/en/language.oop5.visibility.php#language.oop5.visibility-other-objects>`__

Related : :ref:`__set_state() Method <-__set_state>`

Related packages : `spatie/invade <https://packagist.org/packages/spatie/invade>`_
