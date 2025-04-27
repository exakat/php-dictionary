.. _foreach:
.. meta::
	:description:
		Foreach: Foreach is the most popular loop in PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Foreach
	:twitter:description: Foreach: Foreach is the most popular loop in PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Foreach
	:og:type: article
	:og:description: Foreach is the most popular loop in PHP
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/foreach.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Foreach","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Foreach is the most popular loop in PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Foreach.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Foreach
-------

Foreach is the most popular loop in PHP. 

The foreach() loop uses all the elements of the source, and assign them to the blind variable. By default, only the value is assigned; when using the `$key => $value` syntax, the key is also assigned. Then the block is executed with the assigned values. 

Part of the block execution may be skipped by using the `continue` keyword. 

The value may be a reference : then it actually references the original value, which then may be modified in the source. Do not forget to unset referenced variables after the loop, to avoid the dangling reference syndrome, when the last value is changed.

The value may be an array, collecting several values at the same time.



.. code-block:: php
   
   <?php
   
   /*
   foreach($source as $key => $value) {
   	// block
   }
   */
   
   foreach([11,12,13] as $id => $value) {
       print "$id => $value\n";
       // 0 => 11
       // 1 => 12
       // 2 => 13
   }
   
   foreach([[21,22], [33, 34]] as [$a, $b]) {
       print "$a $b\n";
       // 21 22
       // 33 34
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.foreach.php>`__

Related : :ref:`Continue <continue>`, :ref:`For <for>`, :ref:`Loops <loop>`, :ref:`While <while>`, :ref:`Do While <do-while>`
