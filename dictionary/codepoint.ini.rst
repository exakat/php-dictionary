.. _code:
.. meta::
	:description:
		Codepoint: A code point is a numerical value that represents a specific character in an encoding system, such as Unicode.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Codepoint
	:twitter:description: Codepoint: A code point is a numerical value that represents a specific character in an encoding system, such as Unicode
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Codepoint
	:og:type: article
	:og:description: A code point is a numerical value that represents a specific character in an encoding system, such as Unicode
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/code.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Codepoint","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 03 Feb 2026 06:17:19 +0000","dateModified":"Tue, 03 Feb 2026 06:17:19 +0000","description":"A code point is a numerical value that represents a specific character in an encoding system, such as Unicode","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Codepoint.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Codepoint
---------

A code point is a numerical value that represents a specific character in an encoding system, such as Unicode. Each character, symbol, or control command in a character set is assigned a unique code point, allowing it to be stored and transmitted in digital systems.

In Unicode, code points are written as U+ followed by a hexadecimal number. For example, the character ``A`` has the code point ``U+0041``.

.. code-block:: php
   
   <?php
   
   // The ElePHPant code point
   echo $unicodeChar = "\u{1F418}"; //🐘
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Code_point>`__

See also https://developer.mozilla.org/en-US/docs/Glossary/Code_point, https://www.unicode.org/versions/Unicode14.0.0/ch02.pdf#G25564, https://codepoints.net/?lang=en

Related : :ref:`Unicode <unicode>`, :ref:`Escape Sequences <escape-sequence>`
