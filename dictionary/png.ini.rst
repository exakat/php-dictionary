.. _png:
.. _portable-network-graphics:
.. meta::
	:description:
		PNG: PNG, the Portable Network Graphics format, is a lossless raster image format that supports transparency through an alpha channel.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PNG
	:twitter:description: PNG: PNG, the Portable Network Graphics format, is a lossless raster image format that supports transparency through an alpha channel
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PNG
	:og:type: article
	:og:description: PNG, the Portable Network Graphics format, is a lossless raster image format that supports transparency through an alpha channel
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/png.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"PNG","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"PNG, the Portable Network Graphics format, is a lossless raster image format that supports transparency through an alpha channel","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PNG.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


PNG
---

PNG, the Portable Network Graphics format, is a lossless raster image format that supports transparency through an alpha channel. It was designed as an improved, patent-free replacement for GIF.

PNG uses DEFLATE compression, which is lossless: no image data is discarded during compression. This makes PNG ideal for images with sharp edges, text, icons, and screenshots, but less efficient than JPEG for photographs.

PHP's GD extension handles PNG images with functions such as ``imagecreatefrompng()``, ``imagepng()``, and ``imagecolortransparent()``. ``imagepng()`` accepts an optional compression level from 0, no compression, to 9, maximum compression.

The Imagick extension provides additional PNG manipulation capabilities using ImageMagick.

.. code-block:: php
   
   <?php
   
   $image = imagecreatefrompng('input.png');
   
   // Add a watermark or transform...
   
   imagepng($image, 'output.png', 6); // Compression level 6
   imagedestroy($image);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.imagepng.php>`__

See also `How to generate an image: using PHP GD Library. (part 1) <https://medium.com/@emmykolic/how-to-generate-an-image-using-php-gd-library-part-1-22042a9b09d1>`_.

Related : :ref:`GIF <gif>`, :ref:`JPEG <jpg>`, :ref:`Image <image>`, :ref:`Graphic Draw (GD) <gd>`, :ref:`imagick <imagick>`, :ref:`PDF <pdf>`
