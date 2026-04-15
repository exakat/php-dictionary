.. _associative-array:
.. _hash-array:
.. meta::
	:description:
		Associative Array: An associative array is an array whose keys are strings.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Associative Array
	:twitter:description: Associative Array: An associative array is an array whose keys are strings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Associative Array
	:og:type: article
	:og:description: An associative array is an array whose keys are strings
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/associative-array.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Associative Array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"An associative array is an array whose keys are strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Associative Array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Associative Array
-----------------

An associative array is an array whose keys are strings; there may also be integer index, mixed with the string ones. 

In the evolution of PHP, associative arrays evolved into objects, where the index in the array turned into property names.

It is possible to use types others than integer and string with an array syntax: this requires building an object for that.


.. code-block:: php
   
   <?php
   
       $associative = ['a' => 1, 'b' => 4, 3 => 5, 6 ];
   
       echo $associative['a'];
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.array.php>`__

Related : :ref:`Indexed Array <indexed-array>`, :ref:`Array <array>`, :ref:`Collection <collection>`, :ref:`Dictionary <dictionary>`, :ref:`Index <index>`, :ref:`ArrayAccess <arrayaccess>`
