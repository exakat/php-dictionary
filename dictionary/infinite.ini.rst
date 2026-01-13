.. _infinite:
.. meta::
	:description:
		Infinite: Infinite means that an operation is repeated and will never stop being repeated.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Infinite
	:twitter:description: Infinite: Infinite means that an operation is repeated and will never stop being repeated
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Infinite
	:og:type: article
	:og:description: Infinite means that an operation is repeated and will never stop being repeated
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/infinite.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Infinite","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 06 Aug 2025 20:34:15 +0000","dateModified":"Wed, 06 Aug 2025 20:34:15 +0000","description":"Infinite means that an operation is repeated and will never stop being repeated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Infinite.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Infinite
--------

Infinite means that an operation is repeated and will never stop being repeated. 

Infinite is characteristics of loops, generators, recursive functions and streams. Infinite structures may be a bug or a feature, depending on the usage. For example, the event loop is usually an infinite loop, until one of the event triggers a jump out of the loop.

Infinite is also a PHP constant: ``INF``. 

.. code-block:: php
   
   <?php
   
   // infinite loops
   while(true) { }
   
   for(;;) {} 
   
   // infinite generator 
   function integers() {
       $i = 0;
       while(true) {
           yield $i++;
       }
   }
   
   // infinite Fibbonacci sequence
   function recursive ($a = 1, $b = 1) {
       $a2 = $b;
       $b2 = $a + $b;
       print $b2.PHP_EOL;
       recursive($a2, $b2);
   }
   
   ?>


Related : :ref:`INF <inf>`
