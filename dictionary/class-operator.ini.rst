.. _class-operator:
.. meta::
	:description:
		Class Operator: Class operator is the ``::class``, added to a class, interface, trait or enumeration identifier.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class Operator
	:twitter:description: Class Operator: Class operator is the ``::class``, added to a class, interface, trait or enumeration identifier
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Class Operator
	:og:type: article
	:og:description: Class operator is the ``::class``, added to a class, interface, trait or enumeration identifier
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/class-operator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Class Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Class operator is the ``::class``, added to a class, interface, trait or enumeration identifier","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Class Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Class Operator
--------------

Class operator is the ``::class``, added to a class, interface, trait or enumeration identifier. It returns the fully qualified name of the class, according to the current code. 

``::class`` is affected by `use` expressions, but not by class_alias(); function. 

.. code-block:: php
   
   <?php
   
   // class operator in action
   // This is an unknown class, so it displays A\B
   echo A\B::class;
   
   // This is an 'use' class, so it displays A\B
   use A\B as D;
   echo D::class;
   
   // class_alias creates a new class, so it is different. 
   class E{}
   class_alias('E', 'F');
   echo F::class;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.class.class>`__

Related : :ref:`Use <use>`
