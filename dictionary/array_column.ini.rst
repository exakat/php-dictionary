.. _array_column:
.. meta::
	:description:
		array_column: ``array_colum()`` extracts the index or property of the second argument from a list of arrays or objects passed as first argument.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_column
	:twitter:description: array_column: ``array_colum()`` extracts the index or property of the second argument from a list of arrays or objects passed as first argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_column
	:og:type: article
	:og:description: ``array_colum()`` extracts the index or property of the second argument from a list of arrays or objects passed as first argument
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_column.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Array and string offset access syntax with curly braces is no longer supported.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Array and string offset access syntax with curly braces is no longer supported.html","name":"array_column","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 09 Dec 2025 05:54:28 +0000","dateModified":"Tue, 09 Dec 2025 05:54:28 +0000","description":"``array_colum()`` extracts the index or property of the second argument from a list of arrays or objects passed as first argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_column.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_column
------------

``array_colum()`` extracts the index or property of the second argument from a list of arrays or objects passed as first argument. 

It may also assign a key in regards to that value, from a second index or property. 

array_column() omits silently any missing index or property. 

array_column() uses the whole array or object as value, when the second argument is null.

array_column() is more efficient than custom code to convert an array into a map. 


.. code-block:: php
   
   <?php
   
   $list = [
       ['a' => 1, 'b' => 'x'],
       ['a' => 2, 'b' => 'y'],
       ['a' => 3, 'd' => 'z'],
   ];
   
   array_column($list, 'a'); // [1, 2, 3]
   
   array_column($list, 'b'); // [x, y]
   
   array_column($list, 'a', 'b'); // [x => 1, y => 2, 0 => 3]
   
   class X {
       function __construct(public int $a, public string $b, public string $c)
   }
   
   $list = [
       new X(a: 1, b: 'x'),
       new X(a: 2, b: 'y'),
       new X(a: 3, d: 'z'),
   ];
   
   array_column($list, 'a'); // [1, 2, 3]
   
   ?>


`Documentation <https://www.php.net/manual/en/function.array-column.php>`__

See also https://3v4l.org/Nc1uL#veol
