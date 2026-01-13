.. _automagic:
.. _automagically:
.. meta::
	:description:
		Automagic: .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Automagic
	:twitter:description: Automagic: 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Automagic
	:og:type: article
	:og:description: 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/automagic.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Automagic","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 16:45:18 +0000","dateModified":"Fri, 04 Jul 2025 16:45:18 +0000","description":"","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Automagic.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Automagic
---------


Automagic is a porte-manteau, merging automatic and magic. Some PHP operations are automagic, meaning that a lot more is process that what it appears.

Such operations are usually yielding surprise and confusion, or are a cherished feature.

Automagic is mostly used as an adverb, automagically.

.. code-block:: php
   
   <?php
   
   var_dump(10 === '1e1');  // true
   // PHP automagically converts the string into a number, and 1e1 yields 10. 
   
   $array = [null => 1, '33' => 2];
   echo $array[0]; // 1
   // PHP converts the NULL into 0
   echo $array[33]; // 2
   // PHP converts numeric strings to strings
   
   ?>

