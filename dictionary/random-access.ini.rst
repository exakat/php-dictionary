.. _random-access:
.. _direct-access:
.. meta::
	:description:
		Random Access: Random access is the ability to read or write any element of a data structure, or any byte of a file, directly, in constant time, without having to traverse the elements that precede it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Random Access
	:twitter:description: Random Access: Random access is the ability to read or write any element of a data structure, or any byte of a file, directly, in constant time, without having to traverse the elements that precede it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Random Access
	:og:type: article
	:og:description: Random access is the ability to read or write any element of a data structure, or any byte of a file, directly, in constant time, without having to traverse the elements that precede it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/random-access.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/random-access.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/random-access.ini.html","name":"Random Access","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:47:27 +0000","dateModified":"Mon, 13 Jul 2026 18:47:27 +0000","description":"Random access is the ability to read or write any element of a data structure, or any byte of a file, directly, in constant time, without having to traverse the elements that precede it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Random Access.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Random Access
-------------

Random access is the ability to read or write any element of a data structure, or any byte of a file, directly, in constant time, without having to traverse the elements that precede it. It is opposed to sequential access, where reaching the n-th element requires visiting every element before it first.

Arrays and hash maps typically offer random access: a PHP array, whether indexed or associative, is actually an ordered hash map under the hood, and supports ``O(1)`` average-time access to any key, be it ``$array[5]`` or ``$array['name']``. Linked lists, by contrast, only offer sequential access: reaching the n-th node means walking the list from its head.

Random access also applies to files: ``fopen()`` combined with ``fseek()`` lets a program jump directly to any offset of a file and read or write from there, instead of reading it sequentially from the start. This is essential for large files, or for formats such as fixed-length record files, where the position of a given record can be computed directly.

.. code-block:: php
   
   <?php
   
       $array = ['a', 'b', 'c', 'd'];
       echo $array[2]; // random access: 'c', without reading 'a' and 'b' first
   
       $handle = fopen('data.bin', 'rb');
       fseek($handle, 100); // jump directly to byte 100
       $chunk = fread($handle, 10);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Random_access>`__

Related : :ref:`Array, [] <array>`, :ref:`Hash Table <hash-table>`, :ref:`fseek() <fseek>`
