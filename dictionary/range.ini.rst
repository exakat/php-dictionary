.. _range:
.. meta::
	:description:
		range(): ``range()`` produces an array with all values between the two arguments of the function.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: range()
	:twitter:description: range(): ``range()`` produces an array with all values between the two arguments of the function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: range()
	:og:type: article
	:og:description: ``range()`` produces an array with all values between the two arguments of the function
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/range.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"range()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 29 Jul 2025 17:48:45 +0000","dateModified":"Tue, 29 Jul 2025 17:48:44 +0000","description":"``range()`` produces an array with all values between the two arguments of the function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/range().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


range()
-------

``range()`` produces an array with all values between the two arguments of the function.

By default, the produced elements are spaced by 1, or another distance when the ``$step`` argument is used. 

When ``$start`` is bigger than ``$end``, the array is descending. Otherwise, it is ascending.

When both ``$start`` and ``$end`` are single byte strings, such as alphabet letters, ``range()`` produces all letters inbetween. It does not work on multi-bytes characters, nor with values beyond 255.


.. code-block:: php
   
   <?php
   
   // 0, 1, 2, 3, 4, 5, 6, 7, 8, 9
   $figures = range(0, 9); 
   
   // 0, 2, 4, 6, 8
   $even = range(0, 9, 2); 
   
   // The ASCII range
   print_r(range(chr(0), chr(231)));
   
   ?>


`Documentation <https://www.php.net/manual/en/function.range.php>`__
