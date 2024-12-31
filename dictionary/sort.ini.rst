.. _sort:
.. _sorting:
.. meta::
	:description:
		Sort: Sorting is the action to put a list of object into a specific order.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Sort
	:twitter:description: Sort: Sorting is the action to put a list of object into a specific order
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Sort
	:og:type: article
	:og:description: Sorting is the action to put a list of object into a specific order
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sort.ini.html
	:og:locale: en


Sort
----

Sorting is the action to put a list of object into a specific order. In PHP, sorting applies to arrays.

There are several ways to sort arrays in PHP: by value (no prefix), by key (`k` prefix), or by value while keeping the keys (`a` prefix, for associative). 

Then, the sort may be ascending (no prefix), descending (`r`, as in reverse) or custom (`u`, as in user sort). Custom sort is done with a closure or similar.

Based on the prefixes above, the following PHP native functions are available : sort(), rsort(), usort(), ksort(), krsort(), uksort(), asort(), uasort(). There is not ursort(), as the reverse part of the sort may be coded in the custom closure.

In case of ex-aequos while sorting, which are values with the same order, the values are sorted in the same order than the original array. This behavior has changed in PHP 7.0.

It is also possible to sort using a natural sort, which is a way to sort strings like a human would read them : natsort().

The default comparison between elements may be adapted with sort()'s parameter : regular, numeric, string, locale, natural and with or without case.  



.. code-block:: php
   
   
   <?php
   
   $fruits = array( "Orange1", "orange2", "Orange3", "orange20" );
   sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
   foreach ($fruits as $key => $val) {
       echo "fruits[" . $key . "] = " . $val . "\n";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/function.sort.php>`__

See also `natsort <https://www.php.net/natsort>`_

Related : :ref:`Array <array>`, :ref:`Closure <closure>`
