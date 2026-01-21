.. _overwrite:
.. meta::
	:description:
		Overwrite: Overwriting is the process to replace a method, property or constant that was defined in a parent, by a local definition.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Overwrite
	:twitter:description: Overwrite: Overwriting is the process to replace a method, property or constant that was defined in a parent, by a local definition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Overwrite
	:og:type: article
	:og:description: Overwriting is the process to replace a method, property or constant that was defined in a parent, by a local definition
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/overwrite.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Overwrite","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:22:11 +0000","dateModified":"Tue, 20 Jan 2026 07:22:11 +0000","description":"Overwriting is the process to replace a method, property or constant that was defined in a parent, by a local definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Overwrite.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Overwrite
---------

Overwriting is the process to replace a method, property or constant that was defined in a parent, by a local definition. This is related to OOP programming and inheritance.

Overwriting is applicable to constants, methods and properties. Methods still should have a compatible signature with their parent's equivalent, while properties and constants may change their (default) value.

Overwriting is prevented by the ``final`` keyword, or the ``private`` visibility.

Overwriting is also called overloading.

.. code-block:: php
   
   <?php
   
   class x {
       const Y = 1;
       const Z = 2;
   }
   
   class xx extends x {
       // Z is inherited, and its value is 2    
       // Y used to be 1, it is now 31
       const Y = 31;
       const A = 3;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.inheritance.php>`__

Related : :ref:`Final Keyword <final>`, :ref:`Private Visibility <private>`, :ref:`Inheritance <inheritance>`
