.. _steganography:
.. meta::
	:description:
		Steganography: Steganography is the practice of concealing a file, message, image, or video within another file, message, image, or video.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Steganography
	:twitter:description: Steganography: Steganography is the practice of concealing a file, message, image, or video within another file, message, image, or video
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Steganography
	:og:type: article
	:og:description: Steganography is the practice of concealing a file, message, image, or video within another file, message, image, or video
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/steganography.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Steganography","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 08:01:32 +0000","dateModified":"Mon, 13 Jul 2026 08:01:32 +0000","description":"Steganography is the practice of concealing a file, message, image, or video within another file, message, image, or video","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Steganography.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Steganography
-------------

Steganography is the practice of concealing a file, message, image, or video within another file, message, image, or video. Unlike cryptography, which makes content unreadable, steganography aims to hide the very existence of the secret communication.

In the context of PHP and web development, steganography is most commonly associated with hiding data within image files. This can be achieved by embedding information in the least significant bits of pixel data, appending data after image metadata, or exploiting image format specifications to store hidden payloads.

Common techniques include:

+ LSB, Least Significant Bit, insertion, where the least significant bits of pixel color values are modified to encode secret data.
+ Metadata injection, where hidden information is stored in EXIF or other image metadata fields.
+ Appending data after the image's end-of-file marker, which most image viewers ignore.
+ Exploiting comments sections within image formats like JPEG or PNG.

Steganography can be used for legitimate purposes such as digital watermarking and covert communication, but it is also employed in malicious contexts for data exfiltration, command-and-control communication, or smuggling payloads past security filters.

.. code-block:: php
   
   <?php
   
       // Example: hiding a secret message in the least significant bits of an image
       $source = imagecreatefrompng('cover.png');
       $secret = 'Hidden message';
       $bits = '';
       
       for ($i = 0; $i < strlen($secret); $i++) {
           $bits .= str_pad(decbin(ord($secret[$i])), 8, '0', STR_PAD_LEFT);
       }
       
       $bitIndex = 0;
       for ($y = 0; $y < imagesy($source) && $bitIndex < strlen($bits); $y++) {
           for ($x = 0; $x < imagesx($source) && $bitIndex < strlen($bits); $x++) {
               $rgb = imagecolorat($source, $x, $y);
               $r = ($rgb >> 16) & 0xFF;
               $g = ($rgb >> 8) & 0xFF;
               $b = $rgb & 0xFF;
               
               if ($bitIndex < strlen($bits)) {
                   $r = ($r & 0xFE) | $bits[$bitIndex++];
               }
               if ($bitIndex < strlen($bits)) {
                   $g = ($g & 0xFE) | $bits[$bitIndex++];
               }
               if ($bitIndex < strlen($bits)) {
                   $b = ($b & 0xFE) | $bits[$bitIndex++];
               }
               
               imagesetpixel($source, $x, $y, imagecolorallocate($source, $r, $g, $b));
           }
       }
       
       imagepng($source, 'stego.png');
       imagedestroy($source);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Steganography>`__

See also `Steganography in Images with PHP <https://www.hashbangcode.com/article/steganography-images-php>`_ and `OWASP: Steganography <https://owasp.org/www-community/vulnerabilities/Stealth_Coordination>`_.

Related : :ref:`Image <image>`, :ref:`Security <security>`, :ref:`Graphic Draw (GD) <gd>`, :ref:`imagick <imagick>`, , 
