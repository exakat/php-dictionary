.. _nullsafe-object-operator:
.. meta::
	:description:
		Null Safe Object Operator: The Null Safe Object Operator behaves like the object operator, until the object is null.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Null Safe Object Operator
	:twitter:description: Null Safe Object Operator: The Null Safe Object Operator behaves like the object operator, until the object is null
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Null Safe Object Operator
	:og:type: article
	:og:description: The Null Safe Object Operator behaves like the object operator, until the object is null
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/nullsafe-object-operator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Null Safe Object Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:21:26 +0000","dateModified":"Tue, 20 Jan 2026 07:21:26 +0000","description":"The Null Safe Object Operator behaves like the object operator, until the object is null","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Null Safe Object Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Null Safe Object Operator
-------------------------

The Null Safe Object Operator behaves like the object operator, until the object is null. Then, instead of failing with a fatal error, it returns null.

.. code-block:: php
   
   <?php
   
   function foo() : ?A {}
   
   class A {
       public $property = 1;
   }
   
   // This will not fail, but also display nothing
   echo foo()?->property;
   
   // This will fail, when foo() returns null
   echo foo()->property;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.nullsafe>`__

See also https://www.amitmerchant.com/nullsafe-operator-php/, https://medium.com/@prevailexcellent/mastering-null-safety-in-php-8-a-comprehensive-guide-to-using-the-null-safe-operator-47835ba1140b/, https://www.atatus.com/blog/the-null-safe-operator/, https://www.exakat.io/en/null-safe-operator-in-practice/, https://techvblogs.com/blog/exploring-the-null-safe-operator-php

Related : :ref:`Object Operator -> <object-operator>`, :ref:`Scope Resolution Operator :: <scope-resolution-operator>`

Added in PHP 8.0+
