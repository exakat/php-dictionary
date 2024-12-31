.. _imagickpixelexception:
.. meta::
	:description:
		ImagickPixelException: ImagickPixelException is an exception class that is used to handle exceptions related to problems with ImagickPixel objects.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ImagickPixelException
	:twitter:description: ImagickPixelException: ImagickPixelException is an exception class that is used to handle exceptions related to problems with ImagickPixel objects
	:twitter:creator: @exakat
	:og:title: ImagickPixelException
	:og:type: article
	:og:description: ImagickPixelException is an exception class that is used to handle exceptions related to problems with ImagickPixel objects
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/imagickpixelexception.ini.html
	:og:locale: en


ImagickPixelException
---------------------

ImagickPixelException is an exception class that is used to handle exceptions related to problems with ImagickPixel objects.

ImagickPixelException happens when using invalid color specification.

ImagickPixelException is related to the Imagick extension.

.. code-block:: php
   
   <?php
   
   try {
   	// valid creation
   	new ImagickPixel("LightCoral");
   	
   	// invalid creation
   	new ImagickPixel("LightCorral");
   } catch (ImagickPixelException $e) {
   	log(Error while creating a pixel);
   }
   ?>


`Documentation <https://www.php.net/manual/en/imagickpixel.construct.php>`__
