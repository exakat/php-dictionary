.. _hexadecimal-integer:
.. _hexadecimal:
.. meta::
	:description:
		Hexadecimal Integer: Hexadecimal integers are integers with an hexadecimal representation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Hexadecimal Integer
	:twitter:description: Hexadecimal Integer: Hexadecimal integers are integers with an hexadecimal representation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Hexadecimal Integer
	:og:type: article
	:og:description: Hexadecimal integers are integers with an hexadecimal representation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hexadecimal-integer.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Hexadecimal Integer","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Hexadecimal integers are integers with an hexadecimal representation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Hexadecimal Integer.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Hexadecimal Integer
-------------------

Hexadecimal integers are integers with an hexadecimal representation. Their value is the same, yet their are written in a different way than the common decimal. 

Hexadecimal has native support in PHP with the ``0x123`` format. There is also support for hexadecimal characters, inside double-quote strings, with the ``\xhh`` syntax.

There are functions to convert from and to hexadecimal format : hexdec(), dechex() and base_convert(), from ten to sixteen.

PHP also has special syntax for binary and octal numbers. 



.. code-block:: php
   
   <?php
   
       $twenty    = 0x14;
       $twentyToo = 20;
       
       $i = "\x69"; // i is the 105 ASCII code
       $i = 'i';
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.integer.php>`__

Related : :ref:`Binary Integer <binary-integer>`, :ref:`Octal Integer <octal-integer>`
