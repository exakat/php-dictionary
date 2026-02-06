.. _-__function__:
.. meta::
	:description:
		__FUNCTION__: ``__FUNCTION__`` holds the current function or method name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __FUNCTION__
	:twitter:description: __FUNCTION__: ``__FUNCTION__`` holds the current function or method name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __FUNCTION__
	:og:type: article
	:og:description: ``__FUNCTION__`` holds the current function or method name
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__function__.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"__FUNCTION__","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Feb 2026 09:21:16 +0000","dateModified":"Fri, 06 Feb 2026 09:21:16 +0000","description":"``__FUNCTION__`` holds the current function or method name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__FUNCTION__.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__FUNCTION__
------------

``__FUNCTION__`` holds the current function or method name.

The function name includes the namespace it was declared in (e.g. ``N\X\foo``). It also uses the defintion's case.  

When used inside a method, ``__FUNCTION__`` is the name of the method it is used in. When used outside a function, this constant holds an empty string, and does not emit any warning.

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combinaison of uppercase and lower case. 

.. code-block:: php
   
   <?php
   
   function foo() {
       echo __FUNCTION__; // foo
   }
   
   function GOO() {
       echo __function__; // GOO
   }
   
   class X {
       function foo() {
           echo __FUNCTION__; // foo
       }
   }
   
   foo();
   (new X)->foo();
   
   ?>


Related : :ref:`Magic Constants <magic-constant>`, 
