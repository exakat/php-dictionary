.. _autovivification:
.. meta::
	:description:
		Autovivification: Autovivification is the automatic creation of an array when a value is dereferenced.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Autovivification
	:twitter:description: Autovivification: Autovivification is the automatic creation of an array when a value is dereferenced
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Autovivification
	:og:type: article
	:og:description: Autovivification is the automatic creation of an array when a value is dereferenced
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/autovivification.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Autovivification","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 15 Jan 2026 11:04:51 +0000","dateModified":"Thu, 15 Jan 2026 11:04:51 +0000","description":"Autovivification is the automatic creation of an array when a value is dereferenced","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Autovivification.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Autovivification
----------------

Autovivification is the automatic creation of an array when a value is dereferenced.

Autovivification from scalars, including true, is deprecated since PHP 7.4 and removed in PHP 8.0. 

Autovivification from false is deprecated since PHP 8.1. 

Autovivification from null is valid.

.. code-block:: php
   
   <?php
   
   $a = false;
   $a[1] = 2;
   
   $b = null;
   $b[3] = 4;
   
   ?>


`Documentation <https://www.php.net/manual/en/migration81.deprecated.php#migration81.deprecated.core.autovivification-false>`__

See also `Autovivification <https://en.wikipedia.org/wiki/Autovivification>`__
