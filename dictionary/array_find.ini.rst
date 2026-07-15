.. _array_find:
.. meta::
	:description:
		array_find(): ``array_find()`` is a PHP native function, introduced in version 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_find()
	:twitter:description: array_find(): ``array_find()`` is a PHP native function, introduced in version 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_find()
	:og:type: article
	:og:description: ``array_find()`` is a PHP native function, introduced in version 8
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_find.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_find.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_find.ini.html","name":"array_find()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 10:27:22 +0000","dateModified":"Thu, 09 Jul 2026 10:27:22 +0000","description":"``array_find()`` is a PHP native function, introduced in version 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_find().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_find()
------------

``array_find()`` is a PHP native function, introduced in version 8.4, that returns the first value of an array for which a callback returns a truthy value, or ``null`` if no element matches.

Unlike ``array_filter()`` followed by picking the first element, ``array_find()`` short-circuits as soon as a match is found, and never builds an intermediate array. It complements ``array_any()`` and ``array_all()``, which only test for the existence of a match without returning the matching value, and ``array_find_key()``, which returns the matching key instead of the value.

Since ``array_find()`` returns ``null`` when nothing matches, and ``null`` may also be a legitimate value already stored in the array, code that must tell the two situations apart should use ``array_find_key()`` and compare it to ``null`` with ``===``, rather than rely on the returned value alone.

.. code-block:: php
   
   <?php
   
       $numbers = [1, 3, 4, 7, 10];
   
       $firstEven = array_find($numbers, fn($n) => $n % 2 === 0);
       // 4
   
       $found = array_find($numbers, fn($n) => $n > 100);
       // null, no element matches
   
   ?>


`Documentation <https://www.php.net/manual/en/function.array-find.php>`__

See also `PHP RFC: array_find <https://wiki.php.net/rfc/array_find>`_.

Related : :ref:`array_find_key() <array_find_key>`, :ref:`array_filter() <array_filter>`, :ref:`array_search <array_search>`, :ref:`array_walk() <array_walk>`

Added in PHP 8.4
