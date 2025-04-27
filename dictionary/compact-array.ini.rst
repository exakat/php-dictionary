.. _compact-array:
.. meta::
	:description:
		Compact Array: An array is compact if it only uses automated indices, starting with 0.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Compact Array
	:twitter:description: Compact Array: An array is compact if it only uses automated indices, starting with 0
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Compact Array
	:og:type: article
	:og:description: An array is compact if it only uses automated indices, starting with 0
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/compact-array.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Compact Array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"An array is compact if it only uses automated indices, starting with 0","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Compact Array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Compact Array
-------------

An array is compact if it only uses automated indices, starting with 0. This doesn't really show in PHP code, though performances are better for some operations.

Such array's status may be reached by using array_values() or array_keys() on the array. 

This notion is not related to the compact() function.


.. code-block:: php
   
   <?php
   
   $array = [1,2,3];
   
   $notCompact = [1,2,3, 4=>4];
   
   $compactAgain = array_values($notCompact);
   
   ?>


`Documentation <https://www.npopov.com/2012/03/28/Understanding-PHPs-internal-array-implementation.html>`__

Related : :ref:`compact() <compact>`, :ref:`Simple Switch <simple-switch>`
