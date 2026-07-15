.. _lossless:
.. _lossless-compression:
.. meta::
	:description:
		Lossless: Lossless refers to any encoding, compression, or conversion process that preserves all of the original data exactly.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Lossless
	:twitter:description: Lossless: Lossless refers to any encoding, compression, or conversion process that preserves all of the original data exactly
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Lossless
	:og:type: article
	:og:description: Lossless refers to any encoding, compression, or conversion process that preserves all of the original data exactly
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/lossless.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/lossless.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/lossless.ini.html","name":"Lossless","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:10:33 +0000","dateModified":"Tue, 07 Jul 2026 05:10:33 +0000","description":"Lossless refers to any encoding, compression, or conversion process that preserves all of the original data exactly","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Lossless.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Lossless
--------

Lossless refers to any encoding, compression, or conversion process that preserves all of the original data exactly. After a lossless operation, the original content can be reconstructed bit-for-bit from the encoded form.

In image processing, lossless formats such as PNG and GIF use lossless compression: every pixel is preserved and no image quality is sacrificed to reduce file size. Lossless compression is suited to images with sharp edges, text, icons, and screenshots, where artefacts introduced by lossy compression would be visible.

In data serialisation and encoding, lossless round-trips guarantee that encoding then decoding returns the original input, with no data truncated or altered.

PHP's GD extension produces lossless output with ``imagepng()`` and ``imagegif()``. The compression level passed to ``imagepng()`` affects file size but not image fidelity.

.. code-block:: php
   
   <?php
   
   // PNG is lossless: every pixel survives the encode/decode cycle
   $image = imagecreatefrompng('original.png');
   imagepng($image, 'copy.png', 6); // level 6 compression, still lossless
   imagedestroy($image);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Lossless_compression>`__

Related : :ref:`Lossy <lossy>`, :ref:`Compression <compression>`, :ref:`PNG <png>`, :ref:`GIF <gif>`, :ref:`Image <image>`, :ref:`Encode <encode>`, :ref:`Decode <decode>`
