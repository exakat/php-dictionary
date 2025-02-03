.. _imagickexception:
.. meta::
	:description:
		ImagickException: The ImagickException exception is thrown when an error happens while processing an Imagick operation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ImagickException
	:twitter:description: ImagickException: The ImagickException exception is thrown when an error happens while processing an Imagick operation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: ImagickException
	:og:type: article
	:og:description: The ImagickException exception is thrown when an error happens while processing an Imagick operation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/imagickexception.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"ImagickException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 28 Jan 2025 15:14:39 +0000","dateModified":"Tue, 28 Jan 2025 15:14:39 +0000","description":"The ImagickException exception is thrown when an error happens while processing an Imagick operation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ImagickException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


ImagickException
----------------

The ImagickException exception is thrown when an error happens while processing an Imagick operation.

.. code-block:: php
   
   <?php
   
   try {
       $imagick->gammaImage($correction, \Imagick::CHANNEL_ALL);
   } catch (\ImagickException $e) {
       throw new RuntimeException('Failed to apply gamma correction to the image');
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/book.imagick.php>`__

See also `How to Fix 'ImagickException: not authorized' <https://andy-carter.com/blog/how-to-fix-imagickexception-not-authorized>`_

Related : :ref:`Exception <exception>`
