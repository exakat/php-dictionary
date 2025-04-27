.. _square-bracket:
.. _square-brace:
.. meta::
	:description:
		Square Brackets: Square brackets are used with the array syntax: they delimit the offset in the index.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Square Brackets
	:twitter:description: Square Brackets: Square brackets are used with the array syntax: they delimit the offset in the index
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Square Brackets
	:og:type: article
	:og:description: Square brackets are used with the array syntax: they delimit the offset in the index
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/square-bracket.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Square Brackets","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"Square brackets are used with the array syntax: they delimit the offset in the index","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Square Brackets.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Square Brackets
---------------

Square brackets are used with the array syntax: they delimit the offset in the index.

Square brackets are also used to define array: this is the short syntax array, where ``[1,2,3]`` is equivalent to ``array(1,2,3)``.

Square brackets are also used to embody the ``list()`` command: this is the short syntax array, where ``[$a, $b, $c]`` is equivalent to ``list($a,$b,$c)``. The ``list()`` and ``array()`` syntaxes are distinguished between one another as ``list()`` must be in a writing context, such as the left side of an assignation or the values of a foreach, while the ``array()`` must be in a reading context, such as the right side of an assignation, or parameter passing.

Finally, an empty square bracket is the append operator.


.. code-block:: php
   
   <?php
   
   //Definition of arrays
   $array = [1, 2, 3];
   
   // Accessing element in the array
   print $array[2]; // 3 
   
   // equivalent to list
   [$a, $b] = $array; 
   
   $array[] = 4;
   // $array == [1, 2, 3, 4];
   
   ?>


Related : :ref:`Array <array>`, :ref:`Index For Arrays <index-array>`, :ref:`List <list>`, :ref:`Array Append <append>`, :ref:`Curly Brackets <curly-bracket>`, :ref:`Parenthesis <parenthesis>`
