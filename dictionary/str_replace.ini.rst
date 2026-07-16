.. _str_replace:
.. _str_ireplace:
.. meta::
	:description:
		str_replace(): ``str_replace()`` is a PHP native function that replaces all occurrences of a search string with a replacement string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: str_replace()
	:twitter:description: str_replace(): ``str_replace()`` is a PHP native function that replaces all occurrences of a search string with a replacement string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: str_replace()
	:og:type: article
	:og:description: ``str_replace()`` is a PHP native function that replaces all occurrences of a search string with a replacement string
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/str_replace.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/str_replace.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/str_replace.ini.html","name":"str_replace()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 13:44:28 +0000","dateModified":"Thu, 16 Jul 2026 13:44:28 +0000","description":"``str_replace()`` is a PHP native function that replaces all occurrences of a search string with a replacement string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/str_replace().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


str_replace()
-------------

``str_replace()`` is a PHP native function that replaces all occurrences of a search string with a replacement string.

The search and replace arguments may be arrays, allowing several substitutions to be applied in a single call. When arrays are used, each replaced value is rescanned for further matches, which may lead to unexpected double substitutions, unlike ``strtr()``.

The search is case-sensitive. ``str_ireplace()`` is the case-insensitive counterpart.

An optional fourth argument, passed by reference, receives the number of replacements performed.


.. code-block:: php
   
   <?php
   
       echo str_replace('World', 'PHP', 'Hello World'); // Hello PHP
   
       // Array of search/replace pairs
       $search  = ['Hello', 'World'];
       $replace = ['Hi', 'Earth'];
       echo str_replace($search, $replace, 'Hello World'); // Hi Earth
   
       // Case-insensitive version
       echo str_ireplace('world', 'PHP', 'Hello World'); // Hello PHP
   
       // Counting replacements
       str_replace('o', '0', 'Hello World', $count);
       echo $count; // 2
   
   ?>


`Documentation <https://www.php.net/manual/en/function.str-replace.php>`__

Related : :ref:`strtr() <strtr>`, :ref:`String <string>`, :ref:`strpos <strpos>`, :ref:`Case Sensitivity <case-insensitive>`, 
