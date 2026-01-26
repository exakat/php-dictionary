.. _double-arrow:
.. meta::
	:description:
		Double Arrow: The double arrow is the PHP token ``=>``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Double Arrow
	:twitter:description: Double Arrow: The double arrow is the PHP token ``=>``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Double Arrow
	:og:type: article
	:og:description: The double arrow is the PHP token ``=>``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/double-arrow.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Double Arrow","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 11:11:37 +0000","dateModified":"Mon, 26 Jan 2026 11:11:37 +0000","description":"The double arrow is the PHP token ``=>``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Double Arrow.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Double Arrow
------------

The double arrow is the PHP token ``=>``. It is an arrow, and the equal sign as body of the arrow gives it its name of double arrow.

The double arrow is used in several situations: 

+ With arrow functions: ``fn($a) => $a + 1;``
+ In arrays, to distinguish the key from the value: ``['a' => 3]``
+ In list, to distinguish the key from the value: ``list('a' => $b) = ['a' => 4]``
+ In yield, to distinguish the key from the value: ``yield 'a' => $b;``
+ In property hooks, to start the body of the hook: ``private $p { get => $this->p; }``.

.. code-block:: php
   
   <?php
   
   $array = ['a' => 3, 3];
   
   ?>


See also https://www.php.net/manual/en/tokens.php, https://medium.com/@tajbidtousif/understanding-the-difference-between-and-in-php-and-laravel-60f8a38fc5be

Related : :ref:`Arrow Functions <arrow-function>`, :ref:`List <list>`, :ref:`Yield <yield>`, :ref:`Property Hook <property-hook>`
