.. _str_contains:
.. meta::
	:description:
		str_contains(): ``str_contains()`` is a PHP native function that checks if a string contains another string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: str_contains()
	:twitter:description: str_contains(): ``str_contains()`` is a PHP native function that checks if a string contains another string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: str_contains()
	:og:type: article
	:og:description: ``str_contains()`` is a PHP native function that checks if a string contains another string
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/str_contains.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"str_contains()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Apr 2026 09:14:05 +0000","dateModified":"Wed, 15 Apr 2026 09:14:05 +0000","description":"``str_contains()`` is a PHP native function that checks if a string contains another string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/str_contains().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


str_contains()
--------------

``str_contains()`` is a PHP native function that checks if a string contains another string.

The function returns a boolean. It is meant to be a replacement to ``strpos()``, which returns the position of the found string, but is often misused.

The search is case sensitive. There is no case insensitive version of ``str_contains()``. This has to be done by setting the strings to the same case first.

The empty string is always found. ``null`` value is not accepted, but still default to empty string ``''``, so ``true``.


.. code-block:: php
   
   <?php
   
   var_dump(str_contains('abc', '')); // true
   
   var_dump(str_contains('abc', 'a')); // true
   
   var_dump(str_contains('abc', 'A')); // false
   
   var_dump(str_contains('abc', 'd')); // false
   
   var_dump(str_contains('abc', 'abcabc')); // false
   
   var_dump(str_contains('abc', 'abcabc')); // false
   
   ?>


`Documentation <https://www.php.net/manual/fr/function.str-contains.php>`__

Related : :ref:`Null <null>`, :ref:`Empty String <empty-string>`, :ref:`fnmatch() <fnmatch>`, , :ref:`strpos <strpos>`
