.. _object-operator:
.. meta::
	:description:
		Object Operator ->: The Object Operator is the operator to access properties and methods from an object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Object Operator ->
	:twitter:description: Object Operator ->: The Object Operator is the operator to access properties and methods from an object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Object Operator ->
	:og:type: article
	:og:description: The Object Operator is the operator to access properties and methods from an object
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/object-operator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Object Operator ->","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"The Object Operator is the operator to access properties and methods from an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Object Operator ->.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Object Operator ->
------------------

The Object Operator is the operator to access properties and methods from an object. It is ``->``, sometimes called the arrow. 

Depending on the context, those properties and methods must be public, protected or private. When the visibility is not valid, or if the method doesn't exists, PHP yields a Fatal error. Accessing an undefined property is a warning. 

Object Nullsafe Operator is directly related to the Object operator : the difference is that the former keeps on executing when the support object is null, while the second stops with a fatal error.

.. code-block:: php
   
   <?php
   
   class A {
       public $property = 1;
       
       function foo() {
           return __CLASS__;
       }
   }
   
   $a = new a();
   
   // displays 1
   echo $a->property; 
   
   // displays \A
   echo $a->foo(); 
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.properties-methods>`__

Related : :ref:`Null Safe Object Operator <nullsafe-object-operator>`, :ref:`Scope Resolution Operator :: <scope-resolution-operator>`
