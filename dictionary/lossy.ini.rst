.. _lossy:
.. _lossy-compression:
.. meta::
	:description:
		Lossy: Lossy refers to any encoding, compression, or conversion process that permanently discards some of the original data in order to reduce size or simplify the representation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Lossy
	:twitter:description: Lossy: Lossy refers to any encoding, compression, or conversion process that permanently discards some of the original data in order to reduce size or simplify the representation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Lossy
	:og:type: article
	:og:description: Lossy refers to any encoding, compression, or conversion process that permanently discards some of the original data in order to reduce size or simplify the representation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/lossy.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/lossy.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/lossy.ini.html","name":"Lossy","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:43:15 +0000","dateModified":"Thu, 23 Jul 2026 13:43:15 +0000","description":"Lossy refers to any encoding, compression, or conversion process that permanently discards some of the original data in order to reduce size or simplify the representation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Lossy.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Lossy
-----

Lossy refers to any encoding, compression, or conversion process that permanently discards some of the original data in order to reduce size or simplify the representation. Once a lossy operation has been applied, the discarded data cannot be recovered.

In image processing, lossy formats such as JPEG and WebP reduce file size by approximating colour information and discarding fine detail that the human eye is less sensitive to. Higher compression levels increase the degree of loss, introducing visible artefacts such as blocking and ringing. Lossy compression is well suited to photographs where a small quality reduction is imperceptible.

Repeated encode/decode cycles with a lossy format degrade quality cumulatively, because each cycle discards additional data.

PHP's GD extension produces lossy output with ``imagejpeg()``. The optional quality parameter, 0–100, controls the trade-off between file size and fidelity.

.. code-block:: php
   
   <?php
   
       // JPEG is lossy: quality 60 discards more data than quality 90
       $image = imagecreatefromjpeg('photo.jpg');
       imagejpeg($image, 'compressed.jpg', 60);
       imagedestroy($image);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Lossy_compression>`__

Related : :ref:`Lossless <lossless>`, :ref:`Compression <compression>`, :ref:`JPEG <jpg>`, :ref:`Image <image>`, :ref:`Encode <encode>`, :ref:`Decode <decode>`
