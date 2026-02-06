.. _double-check:
.. meta::
	:description:
		Double Check: A double check happens when the same characteristics is checked twice.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Double Check
	:twitter:description: Double Check: A double check happens when the same characteristics is checked twice
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Double Check
	:og:type: article
	:og:description: A double check happens when the same characteristics is checked twice
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/double-check.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Double Check","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Feb 2026 09:42:41 +0000","dateModified":"Fri, 06 Feb 2026 09:42:41 +0000","description":"A double check happens when the same characteristics is checked twice","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Double Check.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Double Check
------------

A double check happens when the same characteristics is checked twice. 

Double check evolve naturally from code that does not take into account the entire system it is residing in.

Double check may be explicit, or implicit. The explicit are plainly written in the code, while implicit double check requires context knowledge. 

Double checks are a feature of defensive programming, where everything is checked as needed, to ensure that a previous omission does not go unchecked, even at the cost of effort duplication.

.. code-block:: php
   
   <?php
   
   // This condition is a double check with the one inside the function foo()
   // This doublecheck uses 2 identical conditions, with different syntax
   if ($j >= 0) {
       foo($j);
   }
   
   function foo(int $i): ?int {
       if ($i < 0) {
           return null;
       }
       
       return $i + 1;
   }
   
   // Foreach() checks for $items to be empty, and skips itself in that case.
   // the empty() check is duplicate
   if (!empty($items)) {
       foreach ($items as $item) {
           doSomething()
       }
   }
   
   ?>


Related : :ref:`Defensive Programming <defensive-programming>`
