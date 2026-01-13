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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Null Safe Object Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"The Null Safe Object Operator behaves like the object operator, until the object is null","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Null Safe Object Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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

See also `This nullsafe operator could come in PHP 8 <https://www.amitmerchant.com/nullsafe-operator-php/>`_, `Mastering Null Safety in PHP 8: A Comprehensive Guide to Using the Null Safe Operator <https://medium.com/@prevailexcellent/mastering-null-safety-in-php-8-a-comprehensive-guide-to-using-the-null-safe-operator-47835ba1140b/>`_, `An Introduction to PHP 8.0's Null Safe Operator <https://www.atatus.com/blog/the-null-safe-operator/>`_, `Null safe operator in practice <https://www.exakat.io/en/null-safe-operator-in-practice/>`_, `Exploring the Null Safe Operator in PHP <https://techvblogs.com/blog/exploring-the-null-safe-operator-php>`_

Related : :ref:`Object Operator -> <object-operator>`, :ref:`Scope Resolution Operator :: <scope-resolution-operator>`

Added in PHP 8.0+
