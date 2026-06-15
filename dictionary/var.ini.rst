.. _var:
.. meta::
	:description:
		Var: ``var`` keyword for introducing PHP properties in classes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Var
	:twitter:description: Var: ``var`` keyword for introducing PHP properties in classes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Var
	:og:type: article
	:og:description: ``var`` keyword for introducing PHP properties in classes
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/var.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Var","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``var`` keyword for introducing PHP properties in classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Var.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Var
---

``var`` keyword for introducing PHP properties in classes. It originates from PHP 4, where it was the only way to declare class properties. Since PHP 5, visibility keywords like ``public``, ``private``, ``protected`` replaced it as the idiomatic syntax.

``var`` is equivalent to ``public``: a property declared with ``var`` is publicly accessible. It is considered legacy syntax and is not recommended.

Modern property declarations support additional modifiers unavailable with ``var``, such as ``final``, ``static``, ``readonly``, and type declarations. 

``var`` may be omitted with other options such as ``final``, ``static``, ``readonly``, or asymmetric visibility: then, the property is publicly accessible.

.. code-block:: php
   
   <?php
   
       class X {
           var $y;   // public $y
           final $z; // public final $z;
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties>`__

Related : :ref:`Visibility <visibility>`, :ref:`Protected Visibility <protected>`, :ref:`Private Visibility <private>`, :ref:`Public Visibility <public>`, :ref:`Properties <property>`, :ref:`static <static>`, :ref:`Final Keyword <final>`, :ref:`Readonly <readonly>`, :ref:`Property Type Declaration <type-declaration-property>`, :ref:`Promoted Properties <promoted-property>`, :ref:`Asymmetric Visibility <asymmetric-visibility>`, :ref:`OOP (Object Oriented Programming) <oop>`, :ref:`Dynamic Properties <dynamic-property>`, :ref:`Legacy <legacy>`
