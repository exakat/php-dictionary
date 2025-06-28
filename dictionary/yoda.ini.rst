.. _yoda:
.. _yoda-condition:
.. meta::
	:description:
		Yoda Condition: Yoda condition is a way to write condition by using any literal value on the left, instead of the right.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Yoda Condition
	:twitter:description: Yoda Condition: Yoda condition is a way to write condition by using any literal value on the left, instead of the right
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Yoda Condition
	:og:type: article
	:og:description: Yoda condition is a way to write condition by using any literal value on the left, instead of the right
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/yoda.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Yoda Condition","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 28 Jun 2025 09:09:53 +0000","dateModified":"Sat, 28 Jun 2025 09:09:53 +0000","description":"Yoda condition is a way to write condition by using any literal value on the left, instead of the right","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Yoda Condition.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Yoda Condition
--------------

Yoda condition is a way to write condition by using any literal value on the left, instead of the right.

This prevents errors where the comparison operator is shortened, and turned into an assignation, which is usually true.

.. code-block:: php
   
   <?php
   
   // Yoda condition
   if (0 == $a) {}
   
   // Assignation, instead of comparison and bug
   if ($a = 0) {}
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Yoda_conditions>`__

See also https://dev.to/greg0ire/why-using-yoda-conditions-you-should-probably-not, https://cs.symfony.com/doc/rules/control_structure/yoda_style.html
