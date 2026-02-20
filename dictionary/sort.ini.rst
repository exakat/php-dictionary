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
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/The backtick (`) operator is deprecated, use shell_exec() instead.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/The backtick (`) operator is deprecated, use shell_exec() instead.html","name":"Sort","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 17 Feb 2026 21:06:30 +0000","dateModified":"Tue, 17 Feb 2026 21:06:30 +0000","description":"Sorting is the action to put a list of object into a specific order","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Sort.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Sort
----

Sorting is the action to put a list of object into a specific order. In PHP, sorting applies to arrays.

There are several ways to sort arrays in PHP: by value (no prefix), by key (``k`` prefix), or by value while keeping the keys (``a`` prefix, for associative). 

Then, the sort may be ascending (no prefix), descending (``r``, as in reverse) or custom (``u``, as in user sort). Custom sort is done with a closure or similar.

Based on the prefixes above, the following PHP native functions are available : sort(), rsort(), usort(), ksort(), krsort(), uksort(), asort(), uasort(). There is not ursort(), as the reverse part of the sort may be coded in the custom closure.

In case of ex-aequos while sorting, which are values with the same order, the values are sorted in the same order than the original array. This behavior has changed in PHP 7.0.

It is also possible to sort using a natural sort, which is a way to sort strings like a human would read them : natsort().

The default comparison between elements may be adapted with sort()'s parameter : regular, numeric, string, locale, natural and with or without case.

.. code-block:: php
   
   <?php
   
   $fruits = ['Orange1', 'orange2', 'Orange3', 'orange20'];
   sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
   
   foreach ($fruits as $key => $val) {
       echo 'fruits[' . $key . '] = ' . $val . PHP_EOL;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/function.sort.php>`__

See also https://www.php.net/natsort

Related : :ref:`Array <array>`, :ref:`Closure <closure>`
