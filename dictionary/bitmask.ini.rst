.. _bitmask:
.. meta::
	:description:
		Bitmask: A bitmask is a single integer, or sequence of bits, used to set, clear, or check the state of specific bits in another integer, usually via bitwise operations.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Bitmask
	:twitter:description: Bitmask: A bitmask is a single integer, or sequence of bits, used to set, clear, or check the state of specific bits in another integer, usually via bitwise operations
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Bitmask
	:og:type: article
	:og:description: A bitmask is a single integer, or sequence of bits, used to set, clear, or check the state of specific bits in another integer, usually via bitwise operations
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/bitmask.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Bitmask","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 01 Feb 2026 20:44:23 +0000","dateModified":"Sun, 01 Feb 2026 20:44:23 +0000","description":"A bitmask is a single integer, or sequence of bits, used to set, clear, or check the state of specific bits in another integer, usually via bitwise operations","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Bitmask.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Bitmask
-------

A bitmask is a single integer, or sequence of bits, used to set, clear, or check the state of specific bits in another integer, usually via bitwise operations.

.. code-block:: php
   
   <?php
   
   $bitfield = 0b111; // 7
   $bitmask  = 0b100; // 4
   
   $result  = $bitfield | $bitmask; // 0b011 == 3
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Mask_(computing)>`__

See also https://medium.com/codex/how-to-use-bitmasks-in-php-a594be597fd3

Related : :ref:`Bitfield <bitfield>`

Related packages : `gksh/bitmask <https://packagist.org/packages/gksh/bitmask>`_
