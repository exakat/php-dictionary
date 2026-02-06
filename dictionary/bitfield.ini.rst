.. _bitfield:
.. meta::
	:description:
		Bitfield: A bitfield is a data structure that packs multiple related boolean flags or small integers into a single integer (or sequence of bits), where each bit or group of bits represents a distinct value or state.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Bitfield
	:twitter:description: Bitfield: A bitfield is a data structure that packs multiple related boolean flags or small integers into a single integer (or sequence of bits), where each bit or group of bits represents a distinct value or state
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Bitfield
	:og:type: article
	:og:description: A bitfield is a data structure that packs multiple related boolean flags or small integers into a single integer (or sequence of bits), where each bit or group of bits represents a distinct value or state
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/bitfield.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Bitfield","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 01 Feb 2026 20:44:06 +0000","dateModified":"Sun, 01 Feb 2026 20:44:06 +0000","description":"A bitfield is a data structure that packs multiple related boolean flags or small integers into a single integer (or sequence of bits), where each bit or group of bits represents a distinct value or state","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Bitfield.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Bitfield
--------

A bitfield is a data structure that packs multiple related boolean flags or small integers into a single integer (or sequence of bits), where each bit or group of bits represents a distinct value or state.

In PHP, bitfields are stored as integers.

.. code-block:: php
   
   <?php
   
   $bitfield = 0b111; // 7
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Bit_field>`__

See also https://medium.com/codex/how-to-use-bitmasks-in-php-a594be597fd3

Related : :ref:`Bitmask <bitmask>`

Related packages : `thesmart/bitfield <https://packagist.org/packages/thesmart/bitfield>`_
