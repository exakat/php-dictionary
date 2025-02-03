.. _parent:
.. _parent-class:
.. meta::
	:description:
		parent: parent is one of the three special keywords that are used to access properties or methods from inside the class definition.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: parent
	:twitter:description: parent: parent is one of the three special keywords that are used to access properties or methods from inside the class definition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: parent
	:og:type: article
	:og:description: parent is one of the three special keywords that are used to access properties or methods from inside the class definition
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/parent.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"parent","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"parent is one of the three special keywords that are used to access properties or methods from inside the class definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/parent.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


parent
------

parent is one of the three special keywords that are used to access properties or methods from inside the class definition. It relates to the first parent class, or any or their own parents. In particular, when searching for methods or properties, it may skip the direct parent, and land on one of the parent above.

``parent`` represents the first parent of the class, and then, recursively, all parents of that class. 

``parent`` is the supertype of the current class. 

In a trait, parent represents the host class's parent, not the trait own parent. In fact, the trait has no parent.


.. code-block:: php
   
   <?php
   
   class W {
       protected const X = 1;
   }
   
   class X extends W {
       function foo() {
           // could also be written as \W::C; here
           return parent::C;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php>`__

Related : :ref:`Overwrite <overwrite>`, :ref:`static <static>`, :ref:`Self <self>`, :ref:`Child Class <child-class>`, :ref:`Late Static Binding <late-static-binding>`
