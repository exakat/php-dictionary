.. _self-reference:
.. meta::
	:description:
		Self-reference: A self-reference is a reference into one-self.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Self-reference
	:twitter:description: Self-reference: A self-reference is a reference into one-self
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Self-reference
	:og:type: article
	:og:description: A self-reference is a reference into one-self
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/self-reference.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Self-reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:31:13 +0000","dateModified":"Fri, 19 Jun 2026 21:31:13 +0000","description":"A self-reference is a reference into one-self","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Self-reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Self-reference
--------------

A self-reference is a reference into one-self. 

An array may hold a reference onto itself. Some functions are disrupted by these references, and yield ``recursion detected``: ``compact()``, ``count()``, ``var_export()``, etc... 

``$GLOBALS`` is a self-reference array: it contains a reference onto itself, as it is also a global variable.

Variables cannot be self-reference, although they might reference another variable, stored in themselves.

.. code-block:: php
   
   <?php
   
       $x = 1;
       $x = &$x;
   
       $array = [1,2,3, &$array];
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Self-reference>`__

Related : :ref:`Variables <variable>`, :ref:`Array <array>`, :ref:`References <reference>`
