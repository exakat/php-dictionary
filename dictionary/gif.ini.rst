.. _gif:
.. _graphics-interchange-format:
.. meta::
	:description:
		GIF: GIF (Graphics Interchange Format) is a bitmap image format developed by CompuServe in 1987.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: GIF
	:twitter:description: GIF: GIF (Graphics Interchange Format) is a bitmap image format developed by CompuServe in 1987
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: GIF
	:og:type: article
	:og:description: GIF (Graphics Interchange Format) is a bitmap image format developed by CompuServe in 1987
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/gif.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"GIF","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 02 Jun 2026 17:08:35 +0000","dateModified":"Tue, 02 Jun 2026 17:08:35 +0000","description":"GIF (Graphics Interchange Format) is a bitmap image format developed by CompuServe in 1987","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/GIF.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


GIF
---

GIF (Graphics Interchange Format) is a bitmap image format developed by CompuServe in 1987. It supports up to 256 colors per frame and uses lossless compression based on the LZW algorithm.

GIF is widely known for supporting animation through multiple frames stored in a single file.

The GD extension can create and manipulate GIF images using functions such as ``imagecreatefromgif()``, ``imagegif()``, and ``imagecreatetruecolor()``.

.. code-block:: php
   
   <?php
   
   $image = imagecreatefromgif('input.gif');
   
   // Manipulate...
   
   imagegif($image, 'output.gif');
   imagedestroy($image);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.imagegif.php>`__

Related : :ref:`JPEG <jpg>`, :ref:`PNG <png>`, :ref:`Image <image>`, :ref:`Graphic Draw (GD) <gd>`
