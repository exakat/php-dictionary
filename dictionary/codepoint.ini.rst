.. _code:
.. meta::
	:description:
		Codepoint: A code point is a numerical value that represents a specific character in an encoding system, such as Unicode.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Codepoint
	:twitter:description: Codepoint: A code point is a numerical value that represents a specific character in an encoding system, such as Unicode
	:twitter:creator: @exakat
	:og:title: Codepoint
	:og:type: article
	:og:description: A code point is a numerical value that represents a specific character in an encoding system, such as Unicode
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/code.ini.html
	:og:locale: en


Codepoint
---------

A code point is a numerical value that represents a specific character in an encoding system, such as Unicode. Each character, symbol, or control command in a character set is assigned a unique code point, allowing it to be stored and transmitted in digital systems.

In Unicode, code points are written as U+ followed by a hexadecimal number. For example, the character ``A`` has the code point ``U+0041``.


.. code-block:: php
   
   <?php
   
   // The ElePHPant code point
   echo $unicodeChar = \u{1F418}; //🐘
   
   ?>


Related : :ref:`Unicode <unicode>`, :ref:`Escape Sequences <escape-sequence>`
