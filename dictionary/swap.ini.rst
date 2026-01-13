.. _swap:
.. meta::
	:description:
		SWAP: Swap may be two things : .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SWAP
	:twitter:description: SWAP: Swap may be two things : 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SWAP
	:og:type: article
	:og:description: Swap may be two things : 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/swap.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"SWAP","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Swap may be two things : ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SWAP.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SWAP
----

Swap may be two things : 

+ Memory, stored on the disk. 
+ The operation to exchange 2 things, one for another. For example, variable swap, which exchange their value.



.. code-block:: php
   
   <?php
   
   // simple swap technic : 
   list($a, $b) = array($a, $b);
   
   [$a, $b] = [$a, $b];
   
   ?>

