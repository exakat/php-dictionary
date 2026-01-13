.. _supertype:
.. meta::
	:description:
		supertype: A supertype is any of the parent types.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: supertype
	:twitter:description: supertype: A supertype is any of the parent types
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: supertype
	:og:type: article
	:og:description: A supertype is any of the parent types
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/supertype.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"supertype","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"A supertype is any of the parent types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/supertype.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


supertype
---------

A supertype is any of the parent types. It is the class that is extended, in a class definition, with the ``extends`` keyword; it also covers all the classes that are a supertype of that parent class. 

The opposite is subtype.


.. code-block:: php
   
   <?php
   
   // Agrandparent is a supertype of AChild
   class Agrandparent {}
   
   // Aparent is a supertype of AChild
   class Aparent extends Agrandparent {}
   
   class Achild extends Aparent{}
   
   // These are not supertype of AChild
   class ABrother extends Aparent{}
   
   class ASister extends Aparent{}
   
   ?>


Related : :ref:`subtype <subtype>`
