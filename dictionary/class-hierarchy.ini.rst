.. _class-hierarchy:
.. meta::
	:description:
		Class Hierarchy: The class hierarchy is a list of class, which are extending one from another.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class Hierarchy
	:twitter:description: Class Hierarchy: The class hierarchy is a list of class, which are extending one from another
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Class Hierarchy
	:og:type: article
	:og:description: The class hierarchy is a list of class, which are extending one from another
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/class-hierarchy.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Class Hierarchy","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 09 Feb 2026 15:48:08 +0000","dateModified":"Mon, 09 Feb 2026 15:48:08 +0000","description":"The class hierarchy is a list of class, which are extending one from another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Class Hierarchy.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Class Hierarchy
---------------

The class hierarchy is a list of class, which are extending one from another. The extended classes are parents, and the exending classes are children. Classes extending the same class are also called siblings. 

The depth of the class hierarchy is a measure of the complexity. 


.. code-block:: php
   
   <?php
   
   class A {}
   
   class B extends A {}
   
   class C extends B {}
   
   class D1 extends C {}
   class D2 extends C {}
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Class_hierarchy>`__
