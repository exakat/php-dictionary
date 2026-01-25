.. _constructor:
.. meta::
	:description:
		constructor: The constructor is a special method in a class, which is called at instantiation of an object, with the provided arguments.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: constructor
	:twitter:description: constructor: The constructor is a special method in a class, which is called at instantiation of an object, with the provided arguments
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: constructor
	:og:type: article
	:og:description: The constructor is a special method in a class, which is called at instantiation of an object, with the provided arguments
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/constructor.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"constructor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 20:46:20 +0000","dateModified":"Sun, 25 Jan 2026 20:46:20 +0000","description":"The constructor is a special method in a class, which is called at instantiation of an object, with the provided arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/constructor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


constructor
-----------

The constructor is a special method in a class, which is called at instantiation of an object, with the provided arguments. 

In PHP, parents constructors are not automatically called, when a child class defines a constructor. They have to be called manually.

.. code-block:: php
   
   <?php
   
   class X {
       private $property;
       
       function __construct($value) {
           $this->property = $value;
       }
   }
   
   $x = new X(1);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.decon.php>`__

Related : :ref:`Destructor <destructor>`
