.. _swap:
.. meta::
	:description:
		SWAP: Swap may be two things : .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SWAP
	:twitter:description: SWAP: Swap may be two things : 
	:twitter:creator: @exakat
	:og:title: SWAP
	:og:type: article
	:og:description: Swap may be two things : 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/swap.ini.html
	:og:locale: en


SWAP
----

Swap may be two things : 

+ Memory, stored on the disk. 
+ The operation to exchange 2 things, one for another. For example, variable swap, which exchange their value.



.. code-block:: php
   
   <?php
   
   // simple swap technic : 
   list($a, $b) = array($a, $b);
   
   [$a, $b] = [$a, $b];
   
   ?>

