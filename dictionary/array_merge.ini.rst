.. _skeleton:
.. meta::
	:description:
		array_merge(): array_merge() combines all the arrays passed as argument into one argument.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_merge()
	:twitter:description: array_merge(): array_merge() combines all the arrays passed as argument into one argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_merge()
	:og:type: article
	:og:description: array_merge() combines all the arrays passed as argument into one argument
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/skeleton.ini.html
	:og:locale: en


array_merge()
-------------

array_merge() combines all the arrays passed as argument into one argument. 

array_merge() accepts an arbitrary list of arrays: in terms of performances, it is better to call it with all the arrays once, rather than merge arrays one after the other.


.. code-block:: php
   
   <?php
   
   $array1 = [1, 2, 3];
   $array2 = [4, 5, 6];
   
   array_merge($array1, $array2);
   // [1, 2, 3, 4, 5, 6];
   
   $arrays = [$array1, $array2]; // may be more... 
   array_merge(...$arrays); 
   // [1, 2, 3, 4, 5, 6];
   
   ?>


`Documentation <https://www.php.net/manual/en/function.array-merge.php>`__

Related : :ref:`plus + <plus>`
