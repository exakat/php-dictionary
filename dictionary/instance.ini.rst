.. _instance:
.. _instantiate:
.. _instantiation:
.. meta::
	:description:
		instance: An instance is an object of a class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: instance
	:twitter:description: instance: An instance is an object of a class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: instance
	:og:type: article
	:og:description: An instance is an object of a class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/instance.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"instance","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"An instance is an object of a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/instance.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


instance
--------

An instance is an object of a class. The class provides the definitions of the behavior of that object, while the object holds the specific data, that makes it unique and distinguishable. 

The creation of an instance, called instantiation, is done with the ``new`` keyword. 


.. code-block:: php
   
   <?php
   
   class X {
   	private int $property;
   	
   	function __construct(int $arg) {
   		$this->propety = $arg;
   	}
   }
   
   $object = new X(2);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.new>`__
