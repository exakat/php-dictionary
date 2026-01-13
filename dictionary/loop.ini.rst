.. _loop:
.. meta::
	:description:
		Loops: A loop is a control structure that allows you to execute a block of code repeatedly based on a specified condition.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Loops
	:twitter:description: Loops: A loop is a control structure that allows you to execute a block of code repeatedly based on a specified condition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Loops
	:og:type: article
	:og:description: A loop is a control structure that allows you to execute a block of code repeatedly based on a specified condition
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/loop.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Undefined Variable %s.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Undefined Variable %s.html","name":"Loops","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 19 Apr 2025 15:11:55 +0000","dateModified":"Sat, 19 Apr 2025 15:11:55 +0000","description":"A loop is a control structure that allows you to execute a block of code repeatedly based on a specified condition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Loops.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Loops
-----

A loop is a control structure that allows you to execute a block of code repeatedly based on a specified condition. Loops are essential for automating repetitive tasks and processing arrays or collections of data. PHP provides several types of loops, including: for, while, do...while and foreach.

The most popular loop is foreach().

Loops may hide in certain functions : for example, array_map() and array_walk() apply a method to every element in an array. 

Generators are closely related to the foreach() loop. 


.. code-block:: php
   
   <?php
   
   foreach([11,12,13] as $id => $value) {
       print "$id => $value\n";
   }
   
   for ($i = 1; $i <= 10; $i++) {
       echo $i;
   }
   
   $i = 10;
   while ($i <= 10) {
       echo $i++;  
   }
   
   $i = 10;
   do {
       echo $i++;  
   } while ($i <= 10);
   
   ?>
   


`Documentation <https://www.php.net/manual/en/language.control-structures.php>`__

Related : :ref:`Do While <do-while>`, :ref:`While <while>`, :ref:`Break <break>`, :ref:`Control Flow <control-flow>`, :ref:`Dangling Reference <dangling-reference>`, :ref:`For <for>`, :ref:`Foreach <foreach>`, :ref:`N+1 Query Problem <n-query>`
