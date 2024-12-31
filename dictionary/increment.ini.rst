.. _increment:
.. meta::
	:description:
		Increment: Increment generally refers to the process of increasing or adding a small amount to a value, or simply one unit.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Increment
	:twitter:description: Increment: Increment generally refers to the process of increasing or adding a small amount to a value, or simply one unit
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Increment
	:og:type: article
	:og:description: Increment generally refers to the process of increasing or adding a small amount to a value, or simply one unit
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/increment.ini.html
	:og:locale: en


Increment
---------

Increment generally refers to the process of increasing or adding a small amount to a value, or simply one unit.

In PHP, increments usually refer to the pre-plusplus and post-plusplus.

.. code-block:: php
   
   <?php
   
   $a = 1;
   
   echo ++$a; // pre plus plus : displays 1, and $a ends with 2
   
   echo $a++; // post plus plus 
   
   echo $a += 1; // increment 
   
   ?>

