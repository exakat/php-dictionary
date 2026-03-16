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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Var","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Mar 2026 14:46:29 +0000","dateModified":"Mon, 16 Mar 2026 14:46:29 +0000","description":"``var`` keyword for introducing PHP properties in classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Var.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Var
---

``var`` keyword for introducing PHP properties in classes. It is now replaced by visibility keywords, ``public``, by default, but also ``private`` or ``protected``; and also by properties options such as ``final``, ``static``, ``readonly``. It is not recommended to use the ``var`` keyword.

.. code-block:: php
   
   <?php
   
       class X {
           var $y;   // public $y
           final $z; // public final $z;
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties>`__

Related : :ref:`Visibility <visibility>`, :ref:`Protected Visibility <protected>`, :ref:`Private Visibility <private>`, :ref:`Public Visibility <public>`
