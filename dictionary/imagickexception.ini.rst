.. _imagickexception:
.. meta::
	:description:
		ImagickException: The ImagickException exception is thrown when an error happens while processing an Imagick operation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ImagickException
	:twitter:description: ImagickException: The ImagickException exception is thrown when an error happens while processing an Imagick operation
	:twitter:creator: @exakat
	:og:title: ImagickException
	:og:type: article
	:og:description: The ImagickException exception is thrown when an error happens while processing an Imagick operation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/imagickexception.ini.html
	:og:locale: en


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
