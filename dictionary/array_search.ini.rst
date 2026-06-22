.. _array_search:
.. meta::
	:description:
		array_search: ``array_search()`` is a native PHP function that searches an array for a value and returns the corresponding key if found, or ``false`` if not found.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_search
	:twitter:description: array_search: ``array_search()`` is a native PHP function that searches an array for a value and returns the corresponding key if found, or ``false`` if not found
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_search
	:og:type: article
	:og:description: ``array_search()`` is a native PHP function that searches an array for a value and returns the corresponding key if found, or ``false`` if not found
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_search.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"array_search","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``array_search()`` is a native PHP function that searches an array for a value and returns the corresponding key if found, or ``false`` if not found","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_search.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_search
------------

``array_search()`` is a native PHP function that searches an array for a value and returns the corresponding key if found, or ``false`` if not found.

It is often used to check if a value exists in an array. When the presence of the value is the main goal of the check, it is advantageously replaced by ``in_array()``. Otherwise, this function is prone to the same trap as ``strpos()``: the returned key may be ``0``, the first element, which is confused with ``false`` in a loose comparison.

``array_search()`` performs a loose comparison by default. Pass ``true`` as the third argument to enable strict comparison.


.. code-block:: php
   
   <?php
   
       $colors = ['red', 'green', 'blue'];
   
       if(array_search('red', $colors)) {
           print "Found red.";
       }
   
       // Error! 'red' is at key 0, which is confused with false
       if(array_search('red', $colors)) {
           print "Found red.";
       }
   
       // This is OK
       if(array_search('red', $colors) !== false) {
           print "Found red.";
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/function.array-search.php>`__

See also `How to Search in a PHP Associative Array — Fast tips <https://medium.com/@valerio_27709/how-to-search-in-a-php-associative-array-fast-tips-5890cdf818e0>`_.

Related : :ref:`Strpos() Syndrome <strpos-syndrom>`, :ref:`Identical Operator <identical>`, :ref:`in_array() <in_array>`
