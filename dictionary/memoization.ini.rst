.. _memoization:
.. meta::
	:description:
		Memoization: Memoization is an optimisation technique to speed up a function by avoiding re-processing previously calculated results.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Memoization
	:twitter:description: Memoization: Memoization is an optimisation technique to speed up a function by avoiding re-processing previously calculated results
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Memoization
	:og:type: article
	:og:description: Memoization is an optimisation technique to speed up a function by avoiding re-processing previously calculated results
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/memoization.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Memoization","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Memoization is an optimisation technique to speed up a function by avoiding re-processing previously calculated results","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Memoization.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Memoization
-----------

Memoization is an optimisation technique to speed up a function by avoiding re-processing previously calculated results. 

Usually, memoization trades processing time with memory. The best suited situation are when the load takes some time to process, and the result is a small amount of memory, such as a count. 

.. code-block:: php
   
   <?php
   
   function docs($file) {
       // local cache 
       static $cache = [];
       
       // If it was already cached, use it. 
       // Docs are supported to be constant during the execution
       if (isset($cache[$file])) {
           return $cache[$file];
       }
       
       $cache[$file] = file_get_contents($file) ?? '';
   }
   
   ?>


`Documentation <https://eddmann.com/posts/implementing-and-using-memoization-in-php/>`__

Added in PHP 4.0+
