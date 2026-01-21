.. _iterator_to_array:
.. meta::
	:description:
		iterator_to_array(): iterator_to_array() converts Iterators and Generators into an array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: iterator_to_array()
	:twitter:description: iterator_to_array(): iterator_to_array() converts Iterators and Generators into an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: iterator_to_array()
	:og:type: article
	:og:description: iterator_to_array() converts Iterators and Generators into an array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/iterator_to_array.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"iterator_to_array()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:11:17 +0000","dateModified":"Mon, 19 Jan 2026 14:11:17 +0000","description":"iterator_to_array() converts Iterators and Generators into an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/iterator_to_array().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


iterator_to_array()
-------------------

iterator_to_array() converts Iterators and Generators into an array. The iterator is entirely run, and each yielded value is stored in the resulting array.

While iterators play a similar role to arrays, they are not typed the same way. Sometimes, it might be necessary to pass an array rather than the iterator to a method. 

iterator_to_array() may use a lot of memory: iterators often save memory by emitting values one by one, instead of creating them before running some more code. Here, iterator_to_array() runs the iterator and create the values before the next step.

iterator_to_array() attempts to run infinite generators, until PHP runs out of memory.

.. code-block:: php
   
   <?php
   
   function foo(): Generator {
       yield 1;
       yield 2;
       yield 3;
   }
   
   print_r(iterator_to_array(foo()));
   
   ?>


`Documentation <https://www.php.net/manual/en/function.iterator-to-array.php>`__
