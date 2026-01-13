.. _edge-case:
.. meta::
	:description:
		Edge Case: An edge case is a situation that occurs at the extreme ends of input, operating conditions, or environment.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Edge Case
	:twitter:description: Edge Case: An edge case is a situation that occurs at the extreme ends of input, operating conditions, or environment
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Edge Case
	:og:type: article
	:og:description: An edge case is a situation that occurs at the extreme ends of input, operating conditions, or environment
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/edge-case.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Call to undefined function each().html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Call to undefined function each().html","name":"Edge Case","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 29 Aug 2025 20:12:56 +0000","dateModified":"Fri, 29 Aug 2025 20:12:56 +0000","description":"An edge case is a situation that occurs at the extreme ends of input, operating conditions, or environment","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Edge Case.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Edge Case
---------

An edge case is a situation that occurs at the extreme ends of input, operating conditions, or environment. It requires exceptional conditions to happen, yet is is a possible situation.

.. code-block:: php
   
   <?php
   
   // PHP addition always returns an integer
   $integer = 2 + 1; 
   
   // adding positive values to PHP_INT_MAX is an edge case
   $integer = PHP_INT_MAX + 1; 
   
   ?>

