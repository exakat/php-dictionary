.. _compatibility:
.. meta::
	:description:
		Compatibility: Compatibility refers to the ability of two or more things to work together without conflicts or issues.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Compatibility
	:twitter:description: Compatibility: Compatibility refers to the ability of two or more things to work together without conflicts or issues
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Compatibility
	:og:type: article
	:og:description: Compatibility refers to the ability of two or more things to work together without conflicts or issues
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/compatibility.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Unterminated comment starting line %d.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Unterminated comment starting line %d.html","name":"Compatibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 20:46:18 +0000","dateModified":"Sun, 25 Jan 2026 20:46:18 +0000","description":"Compatibility refers to the ability of two or more things to work together without conflicts or issues","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Compatibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Compatibility
-------------

Compatibility refers to the ability of two or more things to work together without conflicts or issues. 

In PHP context, it may refer to 

+ version compatibility, when code works in both versions
+ system compatibility, when code works on different operating systems
+ method compatibility, when methods are compatible in the parent and the child class

.. code-block:: php
   
   <?php
   
   class X {
       function foo(int $i) {}
   }
   
   class Y extends X {
       // The type must be compatible with the one of the parent
       // The name does not have to be the same as in the parent
       function foo(int|null $b) {}
   }
   
   ?>


Related : :ref:`Method Compatibility <method-compatibility>`
