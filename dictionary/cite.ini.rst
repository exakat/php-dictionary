.. _cite:
.. _classlike:
.. meta::
	:description:
		Class Interface Trait Enumeration (CITE): CITE stands for Class Interface Trait Enumeration.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class Interface Trait Enumeration (CITE)
	:twitter:description: Class Interface Trait Enumeration (CITE): CITE stands for Class Interface Trait Enumeration
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Class Interface Trait Enumeration (CITE)
	:og:type: article
	:og:description: CITE stands for Class Interface Trait Enumeration
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cite.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Class Interface Trait Enumeration (CITE)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"CITE stands for Class Interface Trait Enumeration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Class Interface Trait Enumeration (CITE).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Class Interface Trait Enumeration (CITE)
----------------------------------------

CITE stands for Class Interface Trait Enumeration. It represents all four type of PHP structures, when they interact together. 

In particular, all four of them share the same namespaces, which may create naming conflict. This is unlike functions and constants, which both have their own namespaces.

.. code-block:: php
   
   <?php
   
   class C {}
   
   interface I {}
   
   trait T {}
   
   enum E {}
   
   const C = 1;
   function C() {} 
   
   ?>


Related : :ref:`Class <class>`, :ref:`Trait <trait>`, :ref:`Interface <interface>`, :ref:`Enumeration (enum) <enum>`
