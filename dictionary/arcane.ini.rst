.. _arcane:
.. meta::
	:description:
		Arcane: Arcane refers to weird features, that are almost unknown or forgotten.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Arcane
	:twitter:description: Arcane: Arcane refers to weird features, that are almost unknown or forgotten
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Arcane
	:og:type: article
	:og:description: Arcane refers to weird features, that are almost unknown or forgotten
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/arcane.ini.html
	:og:locale: en


Arcane
------

Arcane refers to weird features, that are almost unknown or forgotten. They have been with the language since the early versions, and they are eventually removed.

+ It is possible to use ``++`` on a string containing variables. In that case, trailing letters are augmented by one. 
+ strpos() used to accept an integer as second argument: it would convert it automatically to its ASCII equivalent.



.. code-block:: php
   
   <?php
   
   $a = 'b';
   echo ++$a; // c
   
   // 98 is b
   print strpos('abc', 99); // 1
   // This was removed in PHP 8.0
   
   ?>

