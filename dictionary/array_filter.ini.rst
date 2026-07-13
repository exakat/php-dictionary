.. _array_filter:
.. meta::
	:description:
		array_filter(): ``array_filter()`` is a native PHP function that filters elements of an array using a callback.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_filter()
	:twitter:description: array_filter(): ``array_filter()`` is a native PHP function that filters elements of an array using a callback
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_filter()
	:og:type: article
	:og:description: ``array_filter()`` is a native PHP function that filters elements of an array using a callback
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_filter.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"array_filter()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 20:12:49 +0000","dateModified":"Sun, 12 Jul 2026 20:12:49 +0000","description":"``array_filter()`` is a native PHP function that filters elements of an array using a callback","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_filter().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_filter()
--------------

``array_filter()`` is a native PHP function that filters elements of an array using a callback.

It iterates over each value of the array, passing it to the callback function. If the callback returns a truthy value, the element is included in the result array.

When no callback is provided, all entries that evaluate to false are removed.

.. code-block:: php
   
   <?php
   
       $numbers = [1, 2, 3, 4, 5, 6];
       
       // Filter even numbers
       $evens = array_filter($numbers, fn($n) => $n % 2 === 0);
       // [2, 4, 6]
       
       // Remove falsy values
       $data = [0, 1, '', 'hello', null, true, false];
       $clean = array_filter($data);
       // [1, 'hello', true]
   
   ?>


`Documentation <https://www.php.net/manual/en/function.array-filter.php>`__

See also `How to use array_filter in PHP <https://www.php.net/manual/en/function.array-filter.php#105986>`_.

Related : :ref:`Array, [] <array>`, :ref:`array_map() <array_map>`, :ref:`array_walk() <array_walk>`, :ref:`Closure <closure>`
