.. _-__method__:
.. meta::
	:description:
		__METHOD__: ``__METHOD__`` holds the current method or function name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __METHOD__
	:twitter:description: __METHOD__: ``__METHOD__`` holds the current method or function name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __METHOD__
	:og:type: article
	:og:description: ``__METHOD__`` holds the current method or function name
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__method__.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"__METHOD__","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 17 Feb 2026 10:14:20 +0000","dateModified":"Tue, 17 Feb 2026 10:14:20 +0000","description":"``__METHOD__`` holds the current method or function name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__METHOD__.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__METHOD__
----------

``__METHOD__`` holds the current method or function name.

The method name includes the namespace and the class it was declared in (e.g. ``N\X::foo``). It also uses the defintion's case.  

When used inside a method, ``__METHOD__`` is the name of the method it is used in. When used outside a function, this constant holds an empty string, and does not emit any warning.

``__METHOD__`` and ``__FUNCTION__`` are almost identical.

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combinaison of uppercase and lower case. 

.. code-block:: php
   
   <?php
   
   function foo() {
       echo __METHOD__; // foo
   }
   
   function GOO() {
       echo __method__; // GOO
   }
   
   class X {
       function foo() {
           echo __METHOD__; // foo
       }
   }
   
   foo();
   (new X)->foo();
   
   ?>


`Documentation <https://www.php.net/manual/en/language.constants.magic.php>`__

Related : :ref:`Magic Constants <magic-constant>`, :ref:`__FILE__ <-__file__>`
