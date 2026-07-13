.. _array_find_key:
.. meta::
	:description:
		array_find_key(): ``array_find_key()`` is a PHP native function, introduced in version 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_find_key()
	:twitter:description: array_find_key(): ``array_find_key()`` is a PHP native function, introduced in version 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_find_key()
	:og:type: article
	:og:description: ``array_find_key()`` is a PHP native function, introduced in version 8
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_find_key.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"array_find_key()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 10:26:31 +0000","dateModified":"Thu, 09 Jul 2026 10:26:31 +0000","description":"``array_find_key()`` is a PHP native function, introduced in version 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_find_key().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_find_key()
----------------

``array_find_key()`` is a PHP native function, introduced in version 8.4 alongside ``array_find()``, that returns the key of the first element of an array for which a callback returns a truthy value, or ``null`` if no element matches.

It is the key-returning counterpart of ``array_find()``: where ``array_find()`` gives back the matching value, ``array_find_key()`` gives back its key, which is useful when the position, or the original index, of the match matters more than the value itself, or when that exact element needs to be updated or removed afterwards.

Because ``0`` and the empty string are valid, yet falsy, array keys, the result of ``array_find_key()`` must be compared against ``null`` with the identical comparison operator ``===``, exactly like the classic ``strpos()`` syndrome, rather than merely tested for truthiness.

.. code-block:: php
   
   <?php
   
       $fruits = ['apple', 'banana', 'cherry'];
   
       $key = array_find_key($fruits, fn($f) => str_starts_with($f, 'b'));
       // 1
   
       $key = array_find_key($fruits, fn($f) => str_starts_with($f, 'z'));
       // null, no element matches
   
   ?>


`Documentation <https://www.php.net/manual/en/function.array-find-key.php>`__

See also `PHP RFC: array_find <https://wiki.php.net/rfc/array_find>`_.

Related : :ref:`array_find() <array_find>`, :ref:`Strpos() Syndrome <strpos-syndrom>`, :ref:`array_search <array_search>`, :ref:`array_key_first() <array_key_first>`

Added in PHP 8.4
