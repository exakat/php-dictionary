.. _inheritance:
.. meta::
	:description:
		Inheritance: Inheritance is a mechanism where a class is build from another class, and form a hierarchy of classes that share a set of attributes and methods.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Inheritance
	:twitter:description: Inheritance: Inheritance is a mechanism where a class is build from another class, and form a hierarchy of classes that share a set of attributes and methods
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Inheritance
	:og:type: article
	:og:description: Inheritance is a mechanism where a class is build from another class, and form a hierarchy of classes that share a set of attributes and methods
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/inheritance.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Inheritance","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Feb 2026 10:32:01 +0000","dateModified":"Fri, 06 Feb 2026 10:32:01 +0000","description":"Inheritance is a mechanism where a class is build from another class, and form a hierarchy of classes that share a set of attributes and methods","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Inheritance.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Inheritance
-----------

Inheritance is a mechanism where a class is build from another class, and form a hierarchy of classes that share a set of attributes and methods.

.. code-block:: php
   
   <?php
   
   class x {
       public function foo() {
           echo "I am foo!\n";
       }
   }
   
   class y extends x {
       public function boo() {
           echo "I am boo!\n";
       }
   }
   
   $y = new Y();
   $y->boo(); // calling the boo method, defined only with y
   $y->foo(); // calling the foo method, defined in x, and inherited in y
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.inheritance.php>`__

See also https://www.amitmerchant.com/this-is-why-php-dont-have-multiple-inheritance/

Related : :ref:`Class <class>`, 
