.. _backward-compatible:
.. meta::
	:description:
		Backward Compatible: A feature is backward compatible when it can be handled by a previous version than its version of publication.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Backward Compatible
	:twitter:description: Backward Compatible: A feature is backward compatible when it can be handled by a previous version than its version of publication
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Backward Compatible
	:og:type: article
	:og:description: A feature is backward compatible when it can be handled by a previous version than its version of publication
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/backward-compatible.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Backward Compatible","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"A feature is backward compatible when it can be handled by a previous version than its version of publication","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Backward Compatible.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Backward Compatible
-------------------

A feature is backward compatible when it can be handled by a previous version than its version of publication. It is automatically ignored by the previous versions, either by design or by luck.

For example, the attributes ``#[Attribute]`` are backward compatible: they were introduced in PHP 8.0, and their syntax, starting as a comment with a ``#``, is backward compatible: it is processed as a comment in previous PHP versions.

Note that this example is partially backward compatible: it may work or not. 

The contrary of a backward compatible feature is backward incompatible.

.. code-block:: php
   
   <?php
   
       #[Attribute] // This is backward compatible
       class X {
           function foo(#[AttributeForParameter] $a) { // This is not backward compatible
           
           }
       }
   
   ?>


See also `Roave: BackwardCompatibilityCheck <https://github.com/Roave/BackwardCompatibilityCheck>`_.

Related : :ref:`Backward Incompatible <backward-incompatible>`, :ref:`Forward Compatible <forward-compatible>`, :ref:`Legacy <legacy>`, :ref:`Migration <migration>`, :ref:`Polyfill <polyfill>`
