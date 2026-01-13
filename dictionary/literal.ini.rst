.. _literal:
.. meta::
	:description:
		Literal: A literal is a hard coded value in the source.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Literal
	:twitter:description: Literal: A literal is a hard coded value in the source
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Literal
	:og:type: article
	:og:description: A literal is a hard coded value in the source
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/literal.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot mix keyed and unkeyed array entries in assignments.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot mix keyed and unkeyed array entries in assignments.html","name":"Literal","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"A literal is a hard coded value in the source","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Literal.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Literal
-------

A literal is a hard coded value in the source.

There can be literal of type int, float, boolean, null, array. 

Objects and resources cannot be hardcoded, though their creation call may be. 



.. code-block:: php
   
   <?php
   
   // Literal 1 to $a
   $a = 1;
   
   // The object is created during execution.
   $b = new X();
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.decon.php>`__

Related : :ref:`Destructor <destructor>`
