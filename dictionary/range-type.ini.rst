.. _range-type:
.. meta::
	:description:
		Range Type: A first-class range type represents an interval of values, such as ``1.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Range Type
	:twitter:description: Range Type: A first-class range type represents an interval of values, such as ``1
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Range Type
	:og:type: article
	:og:description: A first-class range type represents an interval of values, such as ``1
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/range-type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/range-type.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/range-type.ini.html","name":"Range Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 05:03:07 +0000","dateModified":"Wed, 08 Jul 2026 05:03:07 +0000","description":"A first-class range type represents an interval of values, such as ``1","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Range Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Range Type
----------

A first-class range type represents an interval of values, such as ``1..10`` in Rust or Kotlin, or ``1...10`` in Swift, as a value in its own right, with its own type. A range can be stored in a variable, passed to a function, matched against with pattern matching, or iterated lazily, and the language often overloads slicing and ``for`` syntax to accept it directly.

Because a range is a value, not just a loop construct, it can express things such as ``switch x { 1..5 => ..., 6..10 => ... }`` or a slice bound ``arr[2..5]`` using the same type.

PHP has no range type. ``range()`` is an ordinary function that eagerly builds and returns a plain array of all the values in the interval; the interval itself is never represented as a value, cannot be matched with ``match``, and cannot be used as a slice boundary. Iterating lazily over an interval requires a ``Generator`` written by hand, or an external library.

.. code-block:: php
   
   <?php
   
   // range() eagerly materializes the array; there is no interval value.
   $values = range(1, 10);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Interval_(mathematics)>`__

See also `range() manual page <https://www.php.net/manual/en/function.range.php>`_.

Related : :ref:`range() <range>`, :ref:`Generator <generator>`, :ref:`array_slice() <array_slice>`, :ref:`Pattern Matching <pattern-matching>`
