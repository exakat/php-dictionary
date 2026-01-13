.. _underflow:
.. meta::
	:description:
		Underflow: Underflow happens when a value goes below a limit : out of its range of existence, the behavior of the value is now unknown.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Underflow
	:twitter:description: Underflow: Underflow happens when a value goes below a limit : out of its range of existence, the behavior of the value is now unknown
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Underflow
	:og:type: article
	:og:description: Underflow happens when a value goes below a limit : out of its range of existence, the behavior of the value is now unknown
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/underflow.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Underflow","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Underflow happens when a value goes below a limit : out of its range of existence, the behavior of the value is now unknown","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Underflow.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Underflow
---------

Underflow happens when a value goes below a limit : out of its range of existence, the behavior of the value is now unknown.

Underflow happens with integers (limited to PHP_INT_MAX  and PHP_INT_MIN), floats (``PHP_FLOAT_MAX`` and ``PHP_FLOAT_MIN``). 

Other situations, such as accessing an array element or a string character beyond its first element, defaults to returning ``null``.



.. code-block:: php
   
   <?php
   $a = PHP_INT_MAX;
   $b = (int) ($a +  1);
   
   echo $a.PHP_EOL;
   echo $b;
   
   ?>


Related : :ref:`Null <null>`, :ref:`Overflow <overflow>`
