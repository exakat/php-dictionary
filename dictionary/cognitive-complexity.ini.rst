.. _cognitive-complexity:
.. meta::
	:description:
		Cognitive Complexity: Cognitive complexity is a way of measuring how difficult a piece of code is for a human to understand.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cognitive Complexity
	:twitter:description: Cognitive Complexity: Cognitive complexity is a way of measuring how difficult a piece of code is for a human to understand
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cognitive Complexity
	:og:type: article
	:og:description: Cognitive complexity is a way of measuring how difficult a piece of code is for a human to understand
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cognitive-complexity.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Cognitive Complexity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 12 Feb 2026 21:49:58 +0000","dateModified":"Thu, 12 Feb 2026 21:49:58 +0000","description":"Cognitive complexity is a way of measuring how difficult a piece of code is for a human to understand","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cognitive Complexity.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Cognitive Complexity
--------------------

Cognitive complexity is a way of measuring how difficult a piece of code is for a human to understand. Unlike metrics that focus purely on structure or execution paths, cognitive complexity tries to reflect the mental effort required to read, follow, and reason about code.

.. code-block:: php
   
   <?php
   
   if ($a) {
       if ($b) {
           if ($c) {
               // hard to follow
           }
       }
   }
   
   if ($a == 1) {}
   elseif ($a === 2) {}
   elseif ($a === 3) {}
   elseif ($a === 4) {}
   else {}
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Cognitive_complexity>`__

Related packages : `rarst/phpcs-cognitive-complexity <https://packagist.org/packages/rarst/phpcs-cognitive-complexity>`_, `tomasvotruba/cognitive-complexity <https://packagist.org/packages/tomasvotruba/cognitive-complexity>`_
