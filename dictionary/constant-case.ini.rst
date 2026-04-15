.. _constant-case:
.. meta::
	:description:
		Constant Case: Constant case, also written ``CONSTANT_CASE`` is a way of writing constant names, without spaces, where:.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constant Case
	:twitter:description: Constant Case: Constant case, also written ``CONSTANT_CASE`` is a way of writing constant names, without spaces, where:
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Constant Case
	:og:type: article
	:og:description: Constant case, also written ``CONSTANT_CASE`` is a way of writing constant names, without spaces, where:
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/constant-case.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Constant Case","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"Constant case, also written ``CONSTANT_CASE`` is a way of writing constant names, without spaces, where:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Constant Case.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Constant Case
-------------

Constant case, also written ``CONSTANT_CASE`` is a way of writing constant names, without spaces, where:

+ all the letters are set to upper case
+ each word is separated from the other by an underscore

Constant case is used for constants, both global and class. It is not used for magic constants, which are case insensitive.


.. code-block:: php
   
   <?php
   
   const CONSTANT_CASE = 1;
   
   class X {
       const CLASS_CONSTANT_CASE = 1;
       
       function foo() {
           echo __METHOD__;
           echo __method__; // same as above
       }
   }
   
   ?>


`Documentation <https://stringcase.org/cases/snake/>`__

See also https://stringcase.org/

Related : :ref:`Pascal Case <pascal-case>`, :ref:`Camel Case <camel-case>`, :ref:`Snake Case <snake-case>`, :ref:`Magic Constants <magic-constant>`, :ref:`Static Constant <class-constant>`, :ref:`Constants <constant>`, :ref:`Underscore <underscore>`
