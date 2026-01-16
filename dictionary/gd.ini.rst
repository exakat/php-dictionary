.. _gd:
.. meta::
	:description:
		Graphic Draw (GD): GD is the name of a PHP extension that can manipulate several image formats (such as  GIF, PNG, JPEG, WBMP, and XPM), and draw graphics.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Graphic Draw (GD)
	:twitter:description: Graphic Draw (GD): GD is the name of a PHP extension that can manipulate several image formats (such as  GIF, PNG, JPEG, WBMP, and XPM), and draw graphics
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Graphic Draw (GD)
	:og:type: article
	:og:description: GD is the name of a PHP extension that can manipulate several image formats (such as  GIF, PNG, JPEG, WBMP, and XPM), and draw graphics
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/gd.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Graphic Draw (GD)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 15 Jan 2026 21:01:36 +0000","dateModified":"Thu, 15 Jan 2026 21:01:36 +0000","description":"GD is the name of a PHP extension that can manipulate several image formats (such as  GIF, PNG, JPEG, WBMP, and XPM), and draw graphics","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Graphic Draw (GD).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Graphic Draw (GD)
-----------------

GD is the name of a PHP extension that can manipulate several image formats (such as  GIF, PNG, JPEG, WBMP, and XPM), and draw graphics. 

.. code-block:: php
   
   <?php
   
   // Creating a PNG image with PHP 
   // Extract from the PHP documentation
   header(Content-type: image/png);
   $string = $_GET['text'];
   $im     = imagecreatefrompng(images/button1.png);
   $orange = imagecolorallocate($im, 220, 210, 60);
   $px     = (imagesx($im) - 7.5 * strlen($string)) / 2;
   imagestring($im, 3, $px, 9, $string, $orange);
   imagepng($im);
   
   ?>


`Documentation <https://www.php.net/manual/en/book.image.php>`__

See also https://github.com/libgd/libgd
