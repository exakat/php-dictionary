.. _look-up:
.. _lookup:
.. meta::
	:description:
		Look-up: A look-up is the operation of retrieving a value from a data structure by key, index, or identity.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Look-up
	:twitter:description: Look-up: A look-up is the operation of retrieving a value from a data structure by key, index, or identity
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Look-up
	:og:type: article
	:og:description: A look-up is the operation of retrieving a value from a data structure by key, index, or identity
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/look-up.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Look-up","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:55:31 +0000","dateModified":"Sat, 11 Jul 2026 14:55:31 +0000","description":"A look-up is the operation of retrieving a value from a data structure by key, index, or identity","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Look-up.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Look-up
-------

A look-up is the operation of retrieving a value from a data structure by key, index, or identity. It is one of the most fundamental operations in programming, and its efficiency depends on the underlying structure: ``O(1)`` for hash tables, ``O(log n)`` for sorted arrays or trees, and ``O(n)`` for linear search.

The most common look-up structures are associative arrays, which use hash tables internally and offer average ``O(1)`` access by string or integer key. Objects, SPL data structures, and databases serve as look-up sources in larger systems.

Look-up tables are a specific pattern where a computation is replaced by a precomputed array indexed by the input. They trade memory for speed by eliminating repeated calculations.

Look-ups also appear implicitly in many places: variable resolution, function dispatch, method resolution, and class autoloading are all look-up operations performed by the engine itself.

Understanding look-up complexity matters for performance-sensitive code: choosing a hash-based structure over a sequential scan can change an ``O(n)`` bottleneck into an ``O(1)`` operation.

.. code-block:: php
   
   <?php
   
       // Simple look-up in an associative array
       $countryNames = [
           'FR' => 'France',
           'DE' => 'Germany',
           'JP' => 'Japan',
       ];
       
       $code = 'FR';
       $name = $countryNames[$code] ?? 'Unknown'; // O(1) look-up
       
       // Look-up table replacing a computation
       $dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
       $dayName = $dayNames[date('w')]; // index look-up instead of switch/match
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Lookup_table>`__

Related : :ref:`Hash Table <hash-table>`, :ref:`Array, [] <array>`, :ref:`Pattern <pattern>`, :ref:`Big-o-notation <big-o-notation>`, :ref:`Memoization <memoization>`
