.. _jpg:
.. _jpeg:
.. meta::
	:description:
		JPEG: JPEG, the Joint Photographic Experts Group, is a lossy image compression format widely used for photographs and complex images.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: JPEG
	:twitter:description: JPEG: JPEG, the Joint Photographic Experts Group, is a lossy image compression format widely used for photographs and complex images
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: JPEG
	:og:type: article
	:og:description: JPEG, the Joint Photographic Experts Group, is a lossy image compression format widely used for photographs and complex images
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/jpg.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/jpg.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/jpg.ini.html","name":"JPEG","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"JPEG, the Joint Photographic Experts Group, is a lossy image compression format widely used for photographs and complex images","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/JPEG.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


JPEG
----

JPEG, the Joint Photographic Experts Group, is a lossy image compression format widely used for photographs and complex images. It is identified by the file extensions ``.jpg`` and ``.jpeg``.

JPEG compression reduces file size by discarding some image data, making it suitable for photographs but less ideal for images with sharp edges or text.

PHP's GD extension handles JPEG images with functions such as ``imagecreatefromjpeg()``, ``imagejpeg()``, and ``imagecolorat()``. ``imagejpeg()`` accepts an optional quality parameter from 0 to 100.

.. code-block:: php
   
   <?php
   
   $image = imagecreatefromjpeg('input.jpg');
   
   // Resize or manipulate...
   
   imagejpeg($image, 'output.jpg', 85); // Save at quality 85
   imagedestroy($image);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.imagejpeg.php>`__

Related : :ref:`GIF <gif>`, :ref:`PNG <png>`, :ref:`Image <image>`, :ref:`Graphic Draw (GD) <gd>`, :ref:`PDF <pdf>`
