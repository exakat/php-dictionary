.. _swap:
.. meta::
	:description:
		Swap: Swap may be two things: .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Swap
	:twitter:description: Swap: Swap may be two things: 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Swap
	:og:type: article
	:og:description: Swap may be two things: 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/swap.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Swap","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 18 Feb 2026 18:27:13 +0000","dateModified":"Wed, 18 Feb 2026 18:27:13 +0000","description":"Swap may be two things: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Swap.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Swap
----

Swap may be two things: 

+ Memory, stored on the disk. 
+ The operation to exchange two things, one for another. For example, variable swap, which exchange their value.

.. code-block:: php
   
   <?php
   
   // simple swap technique : 
   // list and array are used for readability
   list($a, $b) = array($a, $b);
   
   // modern version
   [$a, $b] = [$a, $b];
   
   ?>

