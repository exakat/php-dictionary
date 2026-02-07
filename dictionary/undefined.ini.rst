.. _undefined:
.. meta::
	:description:
		Undefined: Something ``undefined`` has not been defined yet.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Undefined
	:twitter:description: Undefined: Something ``undefined`` has not been defined yet
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Undefined
	:og:type: article
	:og:description: Something ``undefined`` has not been defined yet
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/undefined.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Undefined","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 07 Feb 2026 21:05:07 +0000","dateModified":"Sat, 07 Feb 2026 21:05:07 +0000","description":"Something ``undefined`` has not been defined yet","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Undefined.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Undefined
---------

Something ``undefined`` has not been defined yet. The definition may vary from structure to structure: a variable is created upon its first writing, while a class needs a declaration.

.. code-block:: php
   
   <?php
   
   // class x is defined, or declared
   class x {}
   
   // variable $y is undefined
   echo $y;
   
   ?>

