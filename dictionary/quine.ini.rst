.. _quine:
.. meta::
	:description:
		Quine: A quine is a piece of code that produces itself.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Quine
	:twitter:description: Quine: A quine is a piece of code that produces itself
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Quine
	:og:type: article
	:og:description: A quine is a piece of code that produces itself
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/quine.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Quine","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Apr 2026 20:42:43 +0000","dateModified":"Wed, 15 Apr 2026 20:42:43 +0000","description":"A quine is a piece of code that produces itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Quine.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Quine
-----

A quine is a piece of code that produces itself. It takes not input, and outputs a text that is its own code. The code is run to produce itself.

.. code-block:: php
   
   <?php
   $code = '<?php
   $code = %c%s%c;
   printf($code, 39, $code, 39);';
   printf($code, 39, $code, 39);
   
   


`Documentation <https://en.wikipedia.org/wiki/Quine_(computing)>`__

See also https://bobtwells.wordpress.com/2010/01/09/php-quine/, https://dev.to/zxce3/php-quines-self-replicating-code-explained-5089, https://www.matthew.ath.cx/programs/quine, https://doganoo.medium.com/why-self-replicating-code-quines-in-php-is-a-security-red-flag-f6632e65050c

Related : :ref:`Folklore <folklore>`
