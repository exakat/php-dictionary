.. _optimisation:
.. meta::
	:description:
		Optimisation: Optimisation is the act of refactoring code to reduce the amount of resources used during execution.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Optimisation
	:twitter:description: Optimisation: Optimisation is the act of refactoring code to reduce the amount of resources used during execution
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Optimisation
	:og:type: article
	:og:description: Optimisation is the act of refactoring code to reduce the amount of resources used during execution
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/optimisation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Optimisation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Mar 2026 14:46:29 +0000","dateModified":"Mon, 16 Mar 2026 14:46:29 +0000","description":"Optimisation is the act of refactoring code to reduce the amount of resources used during execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Optimisation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Optimisation
------------

Optimisation is the act of refactoring code to reduce the amount of resources used during execution. Optimisation may target time, as faster execution, memory, as using less of it, or specific resources, such as speeding up recalculations, or reducing the time to reach a result.

Optimisation is called micro-optimisation when the resulting code is both measurably optimized, and in the end, not significant for a specific purpose.

.. code-block:: php
   
   <?php
   
   // slow code
   for($i = 0; $i < count($array); ++$i) {
       doSomething($i);
   }
   
   // speed improvement of over 50% of the loop
   $nb = count($array);
   for($i = 0; $i < $nb; ++$i) {
       doSomething($i);
   }
   
   ?>


See also https://sensiolabs.com/blog/2025/optimize-your-php-code-8-functions-you-need-for-efficient-table-handling
