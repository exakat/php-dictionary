.. _deprecated:
.. meta::
	:description:
		Deprecated: Deprecated is a native PHP attribute.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Deprecated
	:twitter:description: Deprecated: Deprecated is a native PHP attribute
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Deprecated
	:og:type: article
	:og:description: Deprecated is a native PHP attribute
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/deprecated.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Deprecated is a native PHP attribute","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Deprecated
----------

Deprecated is a native PHP attribute. It marks a method, function or class constant as available, but soon to be removed. 

The Deprecated attribute accepts an argument, that is shown to help users move to an alternative.

.. code-block:: php
   
   <?php
   
   #[Deprecated]
   function foo() {}
   
   foo();
   //Deprecated: Function foo() is deprecated
   
   #[Deprecated('Use hoo instead.')]
   function goo() {}
   
   goo();
   //Deprecated: Function goo() is deprecated, Use hoo instead.
   
   ?>


`Documentation <https://wiki.php.net/rfc/deprecated_attribute>`__
