.. _delimiter:
.. meta::
	:description:
		Delimiter: Delimiters are specific characters that starts and ends a specific area.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Delimiter
	:twitter:description: Delimiter: Delimiters are specific characters that starts and ends a specific area
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Delimiter
	:og:type: article
	:og:description: Delimiters are specific characters that starts and ends a specific area
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/delimiter.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Delimiter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 13:21:50 +0000","dateModified":"Fri, 04 Jul 2025 13:21:50 +0000","description":"Delimiters are specific characters that starts and ends a specific area","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Delimiter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Delimiter
---------

Delimiters are specific characters that starts and ends a specific area. They are used in structured dataset, to identify a special value among others.

Delimiters are a kind of separators: while separators are the boundary between two distinct values, delimiters frame them with a beginning and an end.

Delimiters may be the same at the beginning and the end. For examples, single or double quotes for strings, in PHP. Or the classic ``/`` for regexes, which may actually be any non-alpha-numeric character.

Delimiters may be the different at the beginning and the end. For examples, parenthesis ``()`` and curly braces ``{}``, or the PHP tags, ``<?php  ?>``. 

Inside the structure, the delimiters are forbidden, to avoid confusing them with the actual limits of the data. If the delimiter characters are needed inside the structure, they may be either escaped with another character, such as backslash inside strings ``'\''``; the delimiters may be replaced by another delimiter, such as in regex where a lot of delimiters are possible; they may also be deactivates with options, such as ``\Q`` and ``\E`` in regexes.

.. code-block:: php
   
   <?php
   
   // delimiters for strings
   echo '';
   
   // special options in regexes
   print preg_match('/^\Q'.$regex.'\E$/i', 'tests') ? 'match' : 'nomatch';
   
   ?>


Related : :ref:`Separator <separator>`
