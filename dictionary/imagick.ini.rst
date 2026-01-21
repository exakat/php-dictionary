.. _imagick:
.. meta::
	:description:
		imagick: ``imagick`` is the native PHP extension to create and modify images using the ImageMagick library.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: imagick
	:twitter:description: imagick: ``imagick`` is the native PHP extension to create and modify images using the ImageMagick library
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: imagick
	:og:type: article
	:og:description: ``imagick`` is the native PHP extension to create and modify images using the ImageMagick library
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/imagick.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/syntax error, unexpected identifier \\%s\\, expecting variable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/syntax error, unexpected identifier \\%s\\, expecting variable.html","name":"imagick","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:11:17 +0000","dateModified":"Mon, 19 Jan 2026 14:11:17 +0000","description":"``imagick`` is the native PHP extension to create and modify images using the ImageMagick library","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/imagick.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


imagick
-------

``imagick`` is the native PHP extension to create and modify images using the ImageMagick library.

``imagick`` is also known with the name ``Image Magick``. It is able to convert between various formats, to edit, combine and optimize images.

.. code-block:: php
   
   <?php
   
   $imagick = new Imagick($imagePath);
   
   $imagick->resizeImage($width, $height, Imagick::FILTER_TRIANGLE , 0);
   
   $width = $imagick->getImageWidth();
   $height = $imagick->getImageHeight();
   
   $newWidth = $width / 2;
   $newHeight = $height / 2;
   
   // crop image to half the middle of the image
   $imagick->cropimage(
       $newWidth,
       $newHeight,
       ($width - $newWidth) / 2,
       ($height - $newHeight) / 2
   );
   
   // resize the picture to bigger size (4 times)
   $imagick->scaleimage(
       $imagick->getImageWidth() * 4,
       $imagick->getImageHeight() * 4
   );
   
   // write the image to disk
   $imagick->writeImage($imagePath.'.2');
   
   ?>


`Documentation <https://www.php.net/manual/en/imagick.cropimage.php>`__

See also https://phpimagick.com/, https://www.jeeviacademy.com/installing-imagick-for-php-on-aws-ec2-everything-you-need-to-know/

Related : :ref:`Graphic Draw (GD) <gd>`
